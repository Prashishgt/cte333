<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Chat with Us!</h1>

    <div id="chatbot-container" class="fixed bottom-6 right-6">
        <div id="chatbot-button"
            class="bg-blue-600 p-4 rounded-full text-white cursor-pointer hover:bg-blue-700 transition-all">
            <span class="text-xl">💬</span>
        </div>

        <div id="chatbox-container" class="hidden fixed bottom-16 right-6 bg-gray-800 p-4 rounded-lg shadow-lg w-72">

            <button id="close-chat" class="absolute top-0 right-1 text-white text-xl hover:text-red-500">
                &times;
            </button>
            <div id="chatbox" class="h-72 overflow-y-auto p-3 bg-gray-900 rounded-lg mb-4">
            </div>

            <input type="text" id="user-input" class="w-full p-2 bg-gray-700 text-white rounded"
                placeholder="Type a message..." />
            <button id="send-message" class="mt-2 w-full p-2 bg-blue-600 text-white rounded">Send</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#chatbot-button').click(function() {
        $('#chatbox-container').toggleClass('hidden');
    });

    $('#close-chat').click(function() {
        $('#chatbox-container').addClass('hidden');
    });

    $('#send-message').click(function() {
        var userMessage = $('#user-input').val();
        if (userMessage.trim() !== '') {
            $('#chatbox').append('<div class="text-white mb-2">You: ' + userMessage + '</div>');
            $('#user-input').val('');
            getChatbotResponse(userMessage);
        }
    });

    function getChatbotResponse(message) {
        $.ajax({
            url: 'chatbot-response.php',
            method: 'POST',
            data: {
                message: message
            },
            success: function(response) {
                $('#chatbox').append('<div class="text-green-400 mb-2">Bot: ' + response +
                    '</div>');
                $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
            }
        });
    }
});
</script>