-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batter`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutmethods`
--

CREATE TABLE `aboutmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutmethods`
--

INSERT INTO `aboutmethods` (`id`, `heading`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(6, 'Community Rewards', '<p>Founders are determined to establish a website that will have multiple purposes and functionalities. A fundamental use will be to train and prepare Newbs in their crypto journey while being rewarded via NEWbToken for taking the time to educate themselves. Crypto enthusiasts and content creators are also to be compensated for their time and effort.</p><p>A percentage of 1.5% of the total supply will be used for learn and earn concepts. The contract address for this reward wallet can be tracked here:</p><p>● 0x6ff24d88cc319a28fe<br>a966af0f8257e73fdf1146</p><p>A supply of 14% will go straight to the founders’ personal wallets. Founders’ wallet addresses are:</p><p>● 0x0827ea3299461c22d<br>19c73727259ae8d16b698a1<br>● 0x78c162ffffd5d39ca07da<br>8fffcaf4f43f137cc6e</p><p>Due to our goal of having multiple functionalities for our website and mobile application, an allotment of 5.7% will be dedicated to the project’s Research and Development (R&amp;D). R&amp;D fund address:</p><p>● 0xa9c3ca4aa78e76ece6b86<br>10c7674d1ff6e058f7d</p><p>Moving forward, we will be focusing on the advancement of encryption and visualization techniques to ensure our NEWb’s financial information is secured, making the community safe.</p>', '6.png', NULL, '2021-05-24 04:42:57'),
(7, 'Social Media Expansion & Marketing', '<p>Our main purpose is to create an exclusive platform/application that can help educate and support investors from different walks of life to attain financial freedom.</p><p>NEWb is community driven. The market allocation fund is 1.2% of the total supply which was agreed upon and decided by the community through their votes. This can be found through:</p><p>● 0xA9e546B0d471c4281b2d<br>6A9821a1aD916C65a72D.</p><p>With this, our objective to expand our network is possible through social media by attracting new investors and constantly updating our NEWbs of our progress.</p>', '7.png', NULL, '2021-05-23 14:57:46'),
(8, 'Exchange Listings', '<p>Currently, NEWb Token is available on PancakeSwap and will be available on multiple exchanges in the coming year. PancakeSwap is a decentralized exchange created on Binance Smart Chain, it boasts fast transactions and reduced gas fees making it inexpensive and easier for our investors to acquire tokens.</p><h2>Contract</h2><p>The NEWbOfficial Team will be updating the Smart contract NEWb is built on to add functionalities to our platform and mobile application Q4 2021-Q1 2022.</p>', '8.png', NULL, '2021-05-23 14:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `aboutservs`
--

CREATE TABLE `aboutservs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutservs`
--

INSERT INTO `aboutservs` (`id`, `heading`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Earn While You Learn', '<p>Users will be able to watch introductory and educational videos on crypto. A short quiz will follow each video and users will be rewarded in NEWb Token via their score. Each score range equates to different quantities of NEWb rewards: The higher the score, the higher the NEWb Token rewards!</p><p>Videos will range from a simple introduction to crypto (i.e. what is crypto?, what is an exchange?, trading terms such as bearish/bullish), how to create different orders on exchanges (i.e. buy/sell orders, limit orders, stop limit orders and stop market orders), to reading charts (i.e. candles, wicks, the dip, open/close, volume, change%).</p>', '3.png', NULL, '2021-05-24 04:33:10'),
(4, 'Learn from the Best', '<p>The learning resource center will feature myriad, well-reviewed, well-respected crypto traders and mentors. Courses will range from beginner to advanced and will feature a preview video for each course as well as a link to the previewed trader/mentor course.</p><h2>Rugpull Education</h2><p>The website will feature a section of informative warning signs in rugpull operations. Users will be able to prepare themselves as best as they can to avoid investing their money into coins that plan to dump once the coin has increased in value.</p>', '4.png', NULL, '2021-05-23 14:19:31'),
(5, 'Power to the NEWbs!', '<p>Polls will be administered in the community chat to give members a voice in NEWb Token’s decisions. Each poll will be introduced with an opening and closing date/time for voters to participate. Members are always encouraged to share ideas for polls!</p><h2>Help is on the Way</h2><p>The NEWb Community is one of support and encouragement. Any and all in the crypto verse are encouraged to participate with a helping hand in mind. Our community strives to provide answers to questions and helpful, accurate and current crypto information to its peers. From beginner to veteran, we constantly want our NEWbs to stay involved so we can help each other!</p><h2>Transparency</h2><p>In addition to giving members a voice, our polls also keep members in the loop on NEWb Token’s future decisions. To ascertain our transparency, our contract addresses are available to the public and can be tracked on BSC Scan. Our holder’s security is our top priority thus, we have submitted our contract for 2 audits to date!</p>', '5.png', NULL, '2021-05-23 14:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `about_btn_links`
--

CREATE TABLE `about_btn_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_btn_links`
--

INSERT INTO `about_btn_links` (`id`, `link_name`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'Beta V1', '#', '2021-05-23 17:57:59', '2021-05-23 12:28:42'),
(2, 'Crypto Learning', '#', '2021-05-23 17:58:02', NULL),
(3, 'Litepaper', '#', '2021-05-23 17:58:05', NULL),
(4, 'Contract', '#', '2021-05-23 17:58:08', NULL),
(5, 'Audit', '#', '2021-05-23 17:58:11', NULL),
(7, 'Get NEWb', '#', '2021-05-23 17:58:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `heading`, `description`, `btn1`, `btn2`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to the Newb', 'NEWb is a deflationary token built on BSC. We believe that providing new investors with education and support through community will empower their investment decisions. NEWb aspires to be the one-stop-shop for crypto education. Most altcoin communities’ focus on educating and empowering their investors are little to none. Critically, many recent altcoins have obliterated the trust of veteran and new investors alike by dumping profits all at once. This is known as a rugpull. NEWb aims to reestablish trust and strengthen investor confidence by implementing a fully functional website that features an earn-while-you-learn concept, a resource center for crypto trading courses, rugpull education, voters rights, a community driven to help one another along their crypto journey and transparency. No investor left behind!', '#', '#', '2021-05-23 21:07:39', '2021-05-23 15:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqheaders`
--

CREATE TABLE `faqheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqheaders`
--

INSERT INTO `faqheaders` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Frequently Asked Questions', '<p>Artificial based on the neural network, the NRM assistant will instantly analyze user data use.</p>', NULL, '2021-05-23 10:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `faqquestions`
--

CREATE TABLE `faqquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqquestions`
--

INSERT INTO `faqquestions` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(5, 'What cryptocurrencies can i use to purchase', 'Currently you can use BNB (Smart Chain) to purchase, *insert play button that brings\r\nup youtube video when clicked', '2021-05-23 10:56:51', NULL),
(8, 'Whats a blockchain?', '<p>Blockchain is a specific type of database.</p><p>● It differs from a typical database in the way it stores information; blockchains</p><p>store data in blocks that are then chained together.</p><p>● As new data comes in it is entered into a fresh block. Once the block is filled with</p><p>data it is chained onto the previous block, which makes the data chained</p><p>together in chronological order.</p><p>● Different types of information can be stored on a blockchain but the most</p><p>common use so far has been as a ledger for transactions.</p><p>● In Bitcoin’s case, blockchain is used in a decentralized way so that no single</p><p>person or group has control—rather, all users collectively retain control.</p><p>● Decentralized blockchains are immutable, which means that the data entered is</p><p>irreversible. For Bitcoin, this means that transactions are permanently recorded</p><p>and viewable to anyone.</p>', '2021-05-23 10:59:41', '2021-05-24 05:07:32'),
(9, 'Whats Binance Smart Chain?', '<p>Binance Smart Chain is a blockchain platform for developers that allows smart</p><p>contracts.</p><p>● It runs in parallel with the original Binance Chain, which is optimized for fast transactions.</p><p>● Binance Smart Chain is also compatible with apps originally coded for Ethereum.</p>', '2021-05-23 11:00:10', NULL),
(10, 'Why am i receiving an error on Pancakeswap', '<p>if you happen to receive an error, try these solutions:</p><p>● Change the last number in the amount of NEWB from 0 to 1</p><p>● Increase slippage</p>', '2021-05-23 11:00:31', NULL),
(11, 'Insufficient Smart chain balance', '<p>This problem is due to not having enough Smart chain BNB for fees Add more smart chain bnb to your wallet to cover fees</p>', '2021-05-23 11:01:02', NULL),
(12, 'Whats a blockchain?s', '<p>Blockchain is a specific type of database.</p><p>● It differs from a typical database in the way it stores information; blockchains</p><p>store data in blocks that are then chained together.</p><p>● As new data comes in it is entered into a fresh block. Once the block is filled with</p><p>data it is chained onto the previous block, which makes the data chained</p><p>together in chronological order.</p><p>● Different types of information can be stored on a blockchain but the most</p><p>common use so far has been as a ledger for transactions.</p><p>● In Bitcoin’s case, blockchain is used in a decentralized way so that no single</p><p>person or group has control—rather, all users collectively retain control.</p><p>● Decentralized blockchains are immutable, which means that the data entered is</p><p>irreversible. For Bitcoin, this means that transactions are permanently recorded</p><p>and viewable to anyone.s</p>', '2021-05-24 05:06:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homeabouts`
--

CREATE TABLE `homeabouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detials` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeabouts`
--

INSERT INTO `homeabouts` (`id`, `detials`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'NEWb is a deflationary token built on Binance Smart Chain, that aims to reestablish trust and strengthen investor confidence by implementing a fully functional website that features an earn-while-you-learn concept, a resource center for crypto trading courses, rugpulleducation, while being a community driven project that helps one another along their crypto journey.', '1.png', '2021-05-23 15:38:52', '2021-05-23 09:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `homebanners`
--

CREATE TABLE `homebanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bnner_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homebanners`
--

INSERT INTO `homebanners` (`id`, `bnner_heading`, `photo`, `created_at`, `updated_at`) VALUES
(5, '<p>NEWb Tokens</p>', '5.jpg', '2021-05-23 15:25:18', '2021-05-23 15:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `homesocials`
--

CREATE TABLE `homesocials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesocials`
--

INSERT INTO `homesocials` (`id`, `name`, `link`, `photo`, `created_at`, `updated_at`) VALUES
(6, 'TWiTTER', 'https://twitter.com/Newb_Token', '6.png', NULL, '2021-05-24 04:15:44'),
(8, 'TELEGRAM', 'http://t.me/newbtokencommu', '8.png', NULL, '2021-05-23 10:23:46'),
(9, 'YOUTUBE', 'https://youtu.be/KdI0HMVNagM', '9.png', NULL, '2021-05-23 10:24:02'),
(10, 'FACEBOOK', 'https://www.facebook.com/newbofficial', '10.png', NULL, '2021-05-23 10:24:28'),
(11, 'INSTAGRAM', 'https://www.instagram.com/newbtokenofficial/', '11.png', NULL, '2021-05-23 10:24:53'),
(12, 'REDDIT', 'https://cutt.ly/rbTS3FR', '12.png', NULL, '2021-05-23 10:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2021-05-23 18:30:53', '2021-05-23 12:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_05_22_105609_create_homebanners_table', 1),
(10, '2021_05_22_180715_create_whynewbs_table', 1),
(11, '2021_05_23_081415_create_roadmaps_table', 2),
(13, '2021_05_23_082612_create_risks_table', 3),
(14, '2021_05_23_091819_create_faqheaders_table', 4),
(15, '2021_05_23_091838_create_faqquestions_table', 4),
(16, '2021_05_23_103554_create_teamheaders_table', 5),
(17, '2021_05_23_110756_create_homeabouts_table', 6),
(18, '2021_05_23_113632_create_homesocials_table', 7),
(19, '2021_05_23_122004_create_testimonials_table', 8),
(20, '2021_05_23_124202_aboutservices', 9),
(21, '2021_05_23_124327_create_aboutservs_table', 9),
(22, '2021_05_23_130210_create_aboutmethods_table', 10),
(23, '2021_05_23_171110_create_visitor_messages_table', 11),
(24, '2021_05_23_171141_create_subscribers_table', 11),
(25, '2021_05_23_175506_create_about_btn_links_table', 12),
(26, '2021_05_23_183004_create_logos_table', 13),
(27, '2021_05_23_184706_create_teams_table', 14),
(28, '2021_05_23_194128_create_team_headings_table', 15),
(29, '2021_05_23_210552_create_about_details_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `risks`
--

CREATE TABLE `risks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `risks`
--

INSERT INTO `risks` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(1, 'RISK DISCLOSURE', '<p>Trade at your own risk. Newb Token is not a registered broker, analysts or investment advisor. Content provided in this website is solely to be informational and will only be for educational purposes. Investor, Founder, The Team and the developers of this website will not be held reliable for any taxes that occur during trade, loss, liability or damages due to reliance on the information and services provided by this website nor we accommodate such. Please be aware of the risks and volatility involved with trading cryptocurrency. Please conduct due diligence.&nbsp;</p>', NULL, '2021-05-23 10:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `roadmaps`
--

CREATE TABLE `roadmaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roadmaps`
--

INSERT INTO `roadmaps` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(7, 'APRIL', '<ul><li>NEWb Token is launched</li></ul>', '2021-05-23 10:03:17', '2021-05-24 04:02:49'),
(8, 'MAY', '<ul><li>Rebranding</li><li>Litepaper V1</li><li>Listing Request on</li><li>Coingecko and Other</li><li>Exchanges</li><li>Audit verified</li></ul>', '2021-05-23 10:03:41', NULL),
(9, 'JUNE', '<ul><li>Earn and Learn Beta Release</li><li>Exchange Partner Listing</li><li>Wallet Activation</li><li>Live Chart</li><li>Newb Merchandise</li></ul>', '2021-05-23 10:04:04', NULL),
(10, 'JULY', '<ul><li>Second Marketing</li><li>Campaign</li><li>Trading Simulation</li><li>Exchange Listing</li></ul>', '2021-05-23 10:04:15', NULL),
(11, 'AUGUST', '<ul><li>NFT Game</li><li>Play-to-Earn Beta</li><li>Litepaper V2</li></ul>', '2021-05-23 10:04:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscriber_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamheaders`
--

CREATE TABLE `teamheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamheaders`
--

INSERT INTO `teamheaders` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(1, 'mehdi', 'mdheid', NULL, '2021-05-23 04:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `fb_link`, `twitter_link`, `linkedin_link`, `instagram_link`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'Managing Director', '#', '#', '#', '#', '.jpg', '2021-05-23 13:22:46', '2021-05-23 13:27:40'),
(4, 'Parves', 'Managing Director', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '4.jpg', '2021-05-23 13:37:29', '2021-05-23 13:37:29'),
(5, 'Anika', 'Managing Director', '#', '#', '#', '#', '5.jpg', '2021-05-23 13:38:03', '2021-05-23 13:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `team_headings`
--

CREATE TABLE `team_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_headings`
--

INSERT INTO `team_headings` (`id`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Team', 'Artificial based on the neural network, the NRM assistant will instantly analyze user data use.', '2021-05-23 19:42:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(5, '<p>NEWb is a deflationary token The Finnish community of NEWB Token is growing and we have a strong confidence that this project will be huge! The idea of helping people that are new to crypto currencies is excellent and more than welcome to the scene.<br>We\'re especially thrilled to see that the project is 100% community driven and 100% transparent. Showing all the project wallets is highly appreciated.<br>Even though the project is still at it\'s sunrise the project team and the community have shown their potential and the strength in this project. Already within the first week we\'ve seen people totally new to cryptos coming in and getting answers to their questions. We\'ve been given info about how to recognize and avoid possible rugpulls, how to interpret wallets on projects and gotten many other pieces of advice. We can\'t even imagine how much more people can be reached when the webpages open up and the actual material is available. There is a huge potential out there who do not know about the potential in cryptos. Getting them in will affect the markets in a positive way. Helping them to avoid being scammed makes it even better for everyone. This is a win-win -project!<br>The project staff and community ooze warmth and make it feel like you\'ve come to home when talking in the Telegram group. The huge hype of moons and sportscars has been left to other coins. We\'re here for the long run, with better and more consistent results.<br>On behalf of the Finnish community,<br>Sami</p>', '5.jpg', NULL, '2021-05-24 04:59:58'),
(6, '<p>First of all, thank you for making this project!<br>Glad I found you guys since the early stage, honestly knew you from the airdrops offered but once I got in to the Telegram Group and read what you wanna do, even chatted with Z a bit about it and how welcoming the team is. I believe am invested in the right community.<br>Honestly the price of the token isn\'t my reason to fully support this project. But the way how many people be it new or vet that getting scammed by the surge of new crypto projects - because so many people want the fast money with their limited knowledge and lots of scammers take an advantage of it (the surge of it is just unreal, the amount of new people that just got into crypto is the one that\'s mooning).<br>That\'s the reason am 100% into this project. No matter how new or vet you are in crypto world, the tech is always developing, things would change quicker than you like, and you have to get updated about it.<br>By this NEWB Community, they aim to educate people about it, aim to help people learn how to differentiate the legit project from scam, how to keep up with the quick change in the crypto worlds.<br>Sharing knowledge to each other, to make crypto a safer and better place is something that the others haven\'t really put their heart into. Am glad NEWB with their transparent team have their eyes on this matter. I thank you for that.<br>Sure, there are lots of guide if you google it up, but it\'s always better when there\'s a community, crypto nevertheless that would legit-ly guide you through all that. Giving you a warning about Scam tokens and what not. But not a financial advice though, they guide you on how to differentiate the real from the fake - not to make a decision on what you should invest. Doesn\'t mean they don\'t teach you on how to make your decision to make a call. But at the end, the call is in your hand - call it with your knowledge, belief and maybe your hunch lol.<br>Putting trust is hard but I have faith in people who don\'t put theirselves first, people who want to make a better place for other, people who are willing to teach the other. One\'s gain doesn\'t mean our loss, it shouldn\'t be hated but celebrated. Lucky call does exist, doesn\'t mean people don\'t need basic knowledge bout crypto world.<br>Cheers for this project that aim to educate more people about crypto! A better knowledge is a key to a better environment is what I believe in.</p>', '6.png', NULL, '2021-05-23 14:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$A8f7pllDHg5D9CEE9E2UMeNjq62R3hh4ID2ghjGv8HTXRE/AGR18C', NULL, 'default.png', '2021-05-23 01:14:54', '2021-05-23 01:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_messages`
--

CREATE TABLE `visitor_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whynewbs`
--

CREATE TABLE `whynewbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whynewbs`
--

INSERT INTO `whynewbs` (`id`, `heading`, `details`, `created_at`, `updated_at`) VALUES
(4, 'EARN WHILE YOU LEARN', '<p>This concept aims to train and prepare Newbs in their crypto journey while being rewarded via NewbToken, for taking the time to educate themselves. This platform also welcomes crypto veterans and content creators to share their experiences and knowledge while earning NewbToken.</p>', '2021-05-23 09:44:03', '2021-05-23 16:32:49'),
(5, 'ALL IN ONE', '<p>TOur website can also work as a digital wallet. The key concept of this digital wallet is to safely store keys and to move your coins in the blockchain.</p><p>&nbsp;</p><p>In addition to a crypto-learning section, our website will feature several topics such as live charts and trading simulation.</p>', '2021-05-23 09:44:28', NULL),
(6, 'COMMUNITY DRIVEN', '<p>We take our community\'s opinions and suggestions seriously. With each course of action of a NewbOfficial, Newbs will have voting rights! We want our Newbs to have a voice and be involved in every step we take.</p>', '2021-05-23 09:45:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutmethods`
--
ALTER TABLE `aboutmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutservs`
--
ALTER TABLE `aboutservs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_btn_links`
--
ALTER TABLE `about_btn_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqheaders`
--
ALTER TABLE `faqheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqquestions`
--
ALTER TABLE `faqquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeabouts`
--
ALTER TABLE `homeabouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homebanners`
--
ALTER TABLE `homebanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesocials`
--
ALTER TABLE `homesocials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `risks`
--
ALTER TABLE `risks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roadmaps`
--
ALTER TABLE `roadmaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamheaders`
--
ALTER TABLE `teamheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_headings`
--
ALTER TABLE `team_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor_messages`
--
ALTER TABLE `visitor_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whynewbs`
--
ALTER TABLE `whynewbs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutmethods`
--
ALTER TABLE `aboutmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `aboutservs`
--
ALTER TABLE `aboutservs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_btn_links`
--
ALTER TABLE `about_btn_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqheaders`
--
ALTER TABLE `faqheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqquestions`
--
ALTER TABLE `faqquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homeabouts`
--
ALTER TABLE `homeabouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homebanners`
--
ALTER TABLE `homebanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homesocials`
--
ALTER TABLE `homesocials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `risks`
--
ALTER TABLE `risks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roadmaps`
--
ALTER TABLE `roadmaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teamheaders`
--
ALTER TABLE `teamheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_headings`
--
ALTER TABLE `team_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor_messages`
--
ALTER TABLE `visitor_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whynewbs`
--
ALTER TABLE `whynewbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
