-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2025 at 06:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'admin', '$2y$10$HCyXNZqLGlDojT2sSQ1le.S1iyJswCUaUOSqexcvw43XfHIVYlMiC', '2025-01-01 03:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` int(11) NOT NULL,
  `solution_id` int(11) NOT NULL,
  `case_study` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `solution_id`, `case_study`) VALUES
(1, 1, 'This solution has helped multiple businesses streamline their operations, saving time and resources. The AI-powered automation features are a game-changer.'),
(2, 2, 'With this solution, companies in the retail sector have been able to personalize customer experiences, leading to higher satisfaction and repeat business.'),
(3, 1, 'ABC Retailers is a large regional retail chain with over 100 stores across the country. The company faced significant challenges with managing its inventory, often experiencing stockouts on popular products and overstocking items that weren\'t selling well. This led to lost sales opportunities and wasted resources.\r\n\r\nABC Retailers needed a solution that would help them optimize inventory levels, improve stock visibility, and increase sales while minimizing losses from overstocking. They also wanted a more efficient way to track inventory across multiple locations.\r\n\r\nWe provided a cloud-based inventory management system with real-time data integration, automated stock monitoring, and predictive analytics. Our solution enabled ABC Retailers to automatically reorder stock based on demand forecasts, track inventory levels across all stores, and reduce stock discrepancies.\r\n\r\nAfter implementing the system, ABC Retailers saw a 25% reduction in stockouts, leading to a 15% increase in sales during the first quarter. Their order fulfillment accuracy improved significantly, resulting in fewer returns and higher customer satisfaction. The company also saved on storage costs by reducing overstocking by 18%. These improvements helped ABC Retailers become more competitive in the fast-moving retail environment.'),
(4, 2, 'XYZ Logistics is a leading provider of transportation and logistics services, managing a fleet of trucks and coordinating shipments for companies across the nation. They faced challenges with fleet management, maintenance schedules, and real-time tracking.\r\n\r\nThe company was dealing with frequent breakdowns of trucks and poor fleet maintenance, leading to costly delays, unscheduled repairs, and decreased productivity. They wanted a solution to proactively manage their fleet and reduce downtime, as well as improve their supply chain efficiency.\r\n\r\nWe implemented an AI-driven predictive maintenance system that analyzes the health of the vehicles in real-time and provides alerts for any potential mechanical issues. Additionally, we integrated route optimization features and supply chain visibility tools, giving XYZ Logistics a comprehensive view of their fleet and delivery status.\r\n\r\nXYZ Logistics saw a 30% reduction in vehicle downtime, resulting in faster deliveries and fewer delays. They also reduced operational costs by 18%, largely due to fewer unscheduled repairs and more efficient route planning. With improved tracking and real-time alerts, the company increased customer satisfaction by providing more reliable services and faster delivery times. The enhanced system has also allowed XYZ Logistics to scale its operations without increasing fleet size, proving highly cost-effective.'),
(5, 1, 'HealthCareCo is a leading healthcare provider with a vast network of hospitals and clinics across the country. The company was struggling with managing patient records across different locations, leading to inefficiencies in patient care and difficulties in accessing accurate, up-to-date information.\r\n\r\nHealthCareCo needed a solution that could centralize patient data, improve accessibility, and enhance decision-making for healthcare professionals. They also wanted to automate routine tasks such as appointment scheduling, prescription reminders, and follow-up care.\r\n\r\nWe developed an AI-powered healthcare assistant that integrates with the company’s existing Electronic Health Record (EHR) system. The AI assistant is capable of retrieving and managing patient records in real-time, analyzing medical data to provide insights, and automating administrative tasks. Additionally, the system includes a virtual assistant for patients to interact with, schedule appointments, and receive healthcare advice.\r\n\r\nHealthCareCo saw a 30% reduction in administrative costs, with the AI assistant automating many routine tasks. The healthcare professionals reported a 20% improvement in the quality of care, thanks to quicker access to patient information. Patients were more satisfied due to faster appointment scheduling and improved communication, leading to a 15% increase in patient retention rates.'),
(6, 2, 'SmartRetail is a growing retail chain with both physical stores and an online presence. The company was facing challenges in optimizing store performance and personalizing customer experiences. They struggled with inventory management and understanding customer buying behaviors, which led to missed sales opportunities.\r\n\r\nSmartRetail needed a solution to track customer interactions, monitor product performance, and provide insights for better inventory management. The company also wanted to enhance customer engagement through personalized offers and promotions based on real-time data.\r\n\r\nWe implemented a data-driven smart retail analytics solution that uses machine learning to track store performance, analyze customer behavior, and predict trends. The system integrated with their existing Point of Sale (POS) systems and used real-time data to generate personalized recommendations for customers. It also provided managers with actionable insights into inventory and product performance.\r\n\r\nThe results were significant: SmartRetail saw a 25% increase in sales as they better tailored their inventory to customer demand. Customer engagement increased by 40%, thanks to personalized promotions. Inventory turnover improved by 18%, and waste reduction was achieved due to better demand forecasting. The system also saved the company 30% in operational costs due to optimized product management.'),
(7, 3, 'FarmTech is a leading agricultural company specializing in sustainable farming practices. They faced difficulties in monitoring and managing large-scale farming operations, particularly in ensuring optimal soil conditions, irrigation levels, and crop health.\r\n\r\nFarmTech needed a system that could provide real-time data about environmental conditions, automate irrigation, and help farmers monitor the health of their crops. They also wanted to reduce water usage and optimize fertilizer application to improve crop yield while minimizing environmental impact.\r\n\r\nWe designed an IoT-based smart farming solution that includes a network of sensors to monitor soil moisture, temperature, humidity, and crop health in real-time. The system also provides automated irrigation control and delivers actionable insights through a mobile application, helping farmers optimize their operations. Additionally, machine learning algorithms were implemented to predict crop yields and identify potential risks, such as pest infestations.\r\n\r\nThe solution resulted in a 30% increase in crop yield for FarmTech, and water usage was reduced by 25% through more efficient irrigation. Fertilizer costs were cut by 20%, and the company was able to reduce pesticide use by 15% through early detection of pest outbreaks. The system helped FarmTech operate more sustainably, improve productivity, and reduce costs.'),
(8, 4, 'FinTech Advisors is a leading online financial advisory firm that helps individuals manage their investments and make informed financial decisions. With an ever-growing client base, the company struggled to provide personalized financial advice at scale, leading to delayed responses and customer dissatisfaction.\r\n\r\nFinTech Advisors needed a solution that could provide automated, personalized investment suggestions based on client profiles and market conditions. The company wanted to scale its operations while maintaining a high level of service and personalized advice.\r\n\r\nWe developed an AI-powered financial advisory tool that analyzes market data, investment trends, and individual client goals to provide personalized investment recommendations. The system uses machine learning to continuously learn from user behavior and adjust advice accordingly. Additionally, the tool includes an easy-to-use dashboard that clients can access to monitor their portfolios and track progress toward their financial goals.\r\n\r\nFinTech Advisors saw a 50% increase in the number of clients served, as the AI tool allowed them to automate personalized recommendations. Customer satisfaction improved by 30%, as clients received timely and relevant advice based on their personal financial situation. The system also saved the company 40% in operational costs, as fewer human advisors were required to manage portfolios.');

-- --------------------------------------------------------

--
-- Table structure for table `event_interests`
--

CREATE TABLE `event_interests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `event_name`, `description`, `image_url`, `event_date`) VALUES
(1, 'AI Tech Expo 2024', 'Showcasing the latest advancements in AI and machine learning.', 'assets/images/ai_tech_expo.jpeg', '2024-05-10'),
(2, 'Healthcare AI Summit', 'Exploring the impact of AI in modern healthcare.', 'assets/images/healthcare_summit.jpg', '2024-06-15'),
(3, 'Retail Revolution', 'How AI is transforming the retail sector.', 'assets/images/retail_revolution.jpg', '2024-07-20'),
(4, 'Agriculture AI Conference', 'Smart farming solutions powered by AI.', 'assets/images/agriculture_ai.jpg', '2024-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(2, 'John Doe', 'john@doe.com', 'I am Interested.', '2025-01-01 03:03:14'),
(3, 'Test', 'test@email.com', 'Test', '2025-01-01 04:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `solution_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `solution_id`, `name`, `review`, `rating`, `created_at`) VALUES
(1, 1, 'John Doe', 'This solution helped us increase productivity by 30%. Highly recommend!', 5, '2025-01-01 03:27:59'),
(2, 1, 'Jane Smith', 'Great customer support and amazing features. Worth the investment.', 4, '2025-01-01 03:27:59'),
(3, 2, 'Michael Lee', 'This software solution met all our requirements and is easy to use.', 4, '2025-01-01 03:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `metadata` text NOT NULL,
  `sector` varchar(100) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `description`, `metadata`, `sector`, `image_url`, `updated_at`) VALUES
(1, 'AI-Powered Healthcare Assistant', 'An advanced AI tool for managing patient records and providing virtual assistance.', '', 'Healthcare', 'assets/images/healthcare_aii.jpg', '2025-01-01 03:19:34'),
(2, 'Smart Retail Analytics', 'A data-driven solution for optimizing retail store performance and customer engagement.', '', 'Retail', 'assets/images/retail_analytics.jpg', '2025-01-01 03:19:34'),
(3, 'IoT-Based Smart Farming', 'An IoT-based system to monitor and manage farming activities in real-time.', '', 'Agriculture', 'assets/images/smart_farming.jpg', '2025-01-01 03:19:34'),
(4, 'Automated Financial Advisor', 'An AI-powered financial advisory tool for personalized investment suggestions.', '', 'Finance', 'assets/images/financial_advisor.jpg', '2025-01-01 03:19:34'),
(5, 'Test1', 'Test', '', 'Test', 'test', '2025-01-01 05:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `solution_feedback`
--

CREATE TABLE `solution_feedback` (
  `id` int(11) NOT NULL,
  `solution_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solution_id` (`solution_id`);

--
-- Indexes for table `event_interests`
--
ALTER TABLE `event_interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solution_id` (`solution_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_feedback`
--
ALTER TABLE `solution_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solution_id` (`solution_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_interests`
--
ALTER TABLE `event_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `solution_feedback`
--
ALTER TABLE `solution_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD CONSTRAINT `case_studies_ibfk_1` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`);

--
-- Constraints for table `solution_feedback`
--
ALTER TABLE `solution_feedback`
  ADD CONSTRAINT `solution_feedback_ibfk_1` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
