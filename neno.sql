-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 06:16 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neno`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `uid`, `pid`, `quan`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 2),
(3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chkout`
--

CREATE TABLE IF NOT EXISTS `chkout` (
  `chkid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`chkid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chkout`
--

INSERT INTO `chkout` (`chkid`, `uid`, `pid`, `quan`, `price`) VALUES
(1, 1, 4, 2, 42.19),
(2, 1, 1, 2, 18.11);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `Ingredient` text NOT NULL,
  `website` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `Ingredient`, `website`, `image`, `price`, `quantity`) VALUES
(1, 'Kashi, Chocolate Almond & Sea Salt with Chia Chewy Granola Bars', 'The Seven Whole Grain Company\r\n160 mg ALA Omega-3\r\n6 g Protein\r\nWhole Grain - 11g or More Per Serving\r\nEat 48 g or More Of Whole Grains Daily\r\nHelp yourself to good - for - you goodies! With wholesome ingredients, our chewy bars make snacking, satisfying and delicious.\r\nAt Kashi, our mission is to change healthy eating from effort to enjoyment. For 30 years,\r\nwe''ve been dedicated to making high quality food with positive nutrition, natural ingredients and great taste.\r\nWe leave in the good-for-you goodness, so you can snack with satisfaction and feel great about it!\r\nOur Chocolate Almond & Sea Salt with Chia - Kashi Chewy Granola Bars\r\nSweet & salty goodness with dark chocolate, roasted almonds and a touch of sea salt.\r\nNaturally Sweetened - No high fructose corn syrup.\r\n7 Whole Grains and Chia - Our unique combination of hearty whole grains and nutritious chia seeds.\r\n4 g Fiber* - A tasty way to get fiber you need.\r\n6 g Protein - From whole almonds and crispy soy grahams.\r\n*4 g Total Fat per Serving\r\nAt Kashi, our mission is to change healthy eating from effort to enjoyment.\r\nFor 30 years, we''ve been dedicated to making high quality food with positive nutrition, natural ingredients and great taste.\r\nWe leave in the good-for-you goodness, so you can snack with satisfaction and feel great about it! \r\n?\r\n', 'Rolled whole grain blend (hard red wheat oats, rye, triticale barley), brown rice syrup, roasted almonds, soy protein isolate,\r\nsemisweet chocolate chunks (organic cane syrup, chocolate liquor, cocoa butter, soy lecithin, ground vanilla beans),\r\ninvert cane syrup, defatted soy grits, dried cane syrup, chocolate liquor, chicory root fiber, chia seeds, degermed yellow corn flour,\r\nhoney expeller pressed canola and safflower oil, rice starch, cocoa vegetable glycerin, sea salt, oat fiber, nonfat milk, kashi.\r\nSeven whole grains & sesame: flour\r\n(whole: oats, hard red wheat, rye, brown rice, triticale, barley buckwheat, sesame seed),\r\nnatural flavors, soy lecithin, peanut flour, mixed tocopherols for freshness.\r\nContains wheat, almonds, soy, milk and peanut ingredients. May contain other tree nuts.\r\n', 'https://www.kashi.com/\r\n', 'p1(2).jpg', 18.11, 70),
(2, 'Neocell, Beauty Bursts, Gourmet Collagen Soft Chews, Super Fruit Punch, 2,000 mg, 60 Soft Chews', 'No Gluten \r\nNo Soy\r\nNo Palm Oil\r\n2,000 MG Collagen\r\nSuper Collagen - Skin Rebuilder\r\nHyaluronic Acid - Skin Hydration\r\nVitamin C - Collagen Enhancer\r\nDietary Supplement \r\nSuggested use : \r\nTake 2 to 4 chews daily.\r\n', 'Rice syrup, dried cane syrup, natural flavors, sunflower lecithin, sunflower oil, citric acid, malic acid, fruit and vegetable juice for\r\ncolor, glycerin, citrus bioflavonoid.\r\nDoes not contain: Soy, wheat, lactose, palm oil, starch, yeast, or artificial flavors.\r\nGluten free. \r\n', 'https://www.kashi.com/\r\n', 'p2 (1).jpg', 64.2, 10),
(3, 'Bhuja, Nut Mix, 7 oz (199 g)', 'New! \r\n5 g Protein Per Serving\r\nMade with Sunflower Oil\r\nNo Trans Fat \r\nAblaze with Taste and Goodness\r\nNon GMO Project Verified\r\nCertified Gluten-Free\r\nAn exotic, wholesome blend of cashews, almonds and peanuts with crispy multigrain noodles and green peas.\r\nGood source of protein and fiber\r\nCholesterol Free\r\nLow glycemic index\r\nVegan and vegetarian\r\nMade with Sunflower Oil\r\nSpice up your life with Majans Nut Mix - the tasty, all natural snack that''s great for a nibble anytime.\r\nAn Indian family favorite, the origin of Bhuja mixes and spices dates back many, many years and each household has its own recipe - including Majans.\r\nIn Australia, Majans was the first company to manufacture Bhuja Nut Mix commercially and make it available nationwide.\r\nFollowing our own family recipe,\r\nwe use only the highest quality all natural ingredients, combining cashews, almonds, peanuts, crispy multigrain noodles and green peas with a savory blend of aromatic spices.\r\nGrab a handful and see why Majans Nut Mix is such a wholesome tasty treat!\r\n', 'Nuts (peanuts, almonds, cashew),\r\nmultigrain noodles (yellow peas, chick peas, sunflower oil, rice, potato, tapioca, sesame, salt), \r\ngreen peas, chick peas, sunflower oil, cane sugar, salt, spices (chili, paprika, turmeric, cumin), maltodextrin, vegetable powder.Contains peanuts, almonds, cashews, sesame, and paprika. May contain soy and seaweeds.\r\n', 'http://majans.com/products/world/bhuja-snacks/', 'p3 (2).jpg', 15, 11),
(4, 'Neocell, Beauty Bursts, Gourmet Collagen Soft Chews, Super Fruit Punch, 2,000 mg, 60 Soft Chews', 'Good for Cooking \r\nUSDA Organic\r\nPure & Unrefined - Cold Pressed\r\nDietary Supplement\r\nCertified Organic by Pro-Cert\r\nAroma and Creamy Tasty of Fresh Coconut!\r\nPure - Cold Pressed - Organic - Non GMO\r\nDelicious Uses : \r\nEnjoy straight from the jar or use in spreads, dips & more! Enhances the flavor of your favorite foods. For cooking, baking or sauteing up to 350\r\nPremium source : \r\nOrganic, extra virgin, unrefined & unbleached from non-GMO coconuts; Hexane-free. 62% MCTs 8.7 g medium chain triglycerides (lauric, caprylic and capric acids) per serving. See Supplement Facts for total fat and saturated fat content.\r\nSuggested use : \r\nRecommendation: Take 1 tablespoon (14 g) as needed.\r\n', 'Organic extra virgin coconut oil. Gluten Free. No artificial ingredient or preservatives. Satisfaction Guaranteed.', 'http://neocell.com/splash/index.php\r\n', 'NWY-15673-14.jpg', 42.19, 7),
(5, 'Back to Nature, Chocolate Chunk Cookies, 9.5 oz (269 g)', 'No Artificial Preservatives, Flavors, or Colors\r\nNo High Fructose Corn Syrup\r\nSince 1960\r\nWheat Flour & Rainforest Alliance\r\nCertified Semisweet Chocolate\r\nRainforest Alliance Certified Cocoa\r\nKosher Dairy\r\nOf Pure Enjoyment\r\nSimple ingredients. Simply delicious. Simply good.\r\nFor over 50 years, Back to Nature has passionately created foods with wholesome grains, real nutrition, \r\nand the delicious flavors of nature free from artificial ingredients.\r\nWe give people truly flavorful, wholesome foods made with simple ingredients.\r\n', 'Unbleached wheat flour, semisweet chocolate (sugar, chocolate*, dextrose, cocoa butter, soy lecithin, vanilla extract),\r\nnatural milled cane sugar, safflower oil, brown rice syrup, baking soda, sea salt.\r\n* Rainforest Alliance Certified cocoa beans\r\nContains: Wheat, soy.\r\n', 'http://www.backtonaturefoods.com/\r\n', 'p4 (2).jpg', 14.62, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uemail` varchar(200) NOT NULL,
  `upass` varchar(200) NOT NULL,
  `ucountry` varchar(200) NOT NULL,
  `ucity` varchar(200) NOT NULL,
  `uphone` varchar(200) NOT NULL,
  `ustreetno` varchar(200) NOT NULL,
  `ustreetname` varchar(200) NOT NULL,
  `uzip` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uemail`, `upass`, `ucountry`, `ucity`, `uphone`, `ustreetno`, `ustreetname`, `uzip`) VALUES
(1, 'a@gmail.com', '123', 'Saudi Arabia', 'albaha', '568785', '678', 'ghhgj', 'w123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
