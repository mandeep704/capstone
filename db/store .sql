-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 07:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `image`) VALUES
(1, 'Cauliflower Crust ', 12.79, 'Sometimes we even impress ourselves. Pizza Pizza\'s Cauliflower Crust is gluten-free, vegan,  \"/n\" contains two servings of vegetables, and tastes awesome! Available in Medium only.', 'images/1.jpg'),
(2, 'Keto Crust ', 13.99, 'Get your pizza fix with less carbs! Create your own by selecting any toppings of your choice.\"/n\" Made with certified Keto Uncrust.See About our \"/n\" Food page for nutritional info. Available in Small only.', 'images/2.jpg'),
(3, 'Spicy BBQ ', 13.29, 'Saddle up for a slice - It\'s a showdown at Flavour Corral, with grilled chicken, hot banana peppers, red onions, Texas BBQ sauce and mozzarella cheese. Wanna amp it up even more? Add Frank\'s Red Hot!', 'images/3.jpg'),
(4, 'Drinks', 8.99, 'Choose from a variety of Coke products. Available in 355 mL cans.', 'images/Coke.jpg'),
(5, ' Cauli Blanca', 16.49, 'You\'ve never had a veggie pizza like this before! Our Cauliflower Crust, is drizzled with olive oil and topped with artichokes, grilled zucchini, roasted garlic, mozzarella cheese, parmesan and Italiano blend seasoning. Available in Medium only.', 'images/5.jpg'),
(6, 'Chicken Bruschetta', 14.79, 'A Twist on Italian Taste - What can make bruschetta better? How about grilled chicken? Add roasted garlic, Italiano Blend Seasoning, parmesan and mozzarella, and it\'s molto deliziosa.', 'images/6.jpg'),
(7, 'Thin Pesto Amore', 7.29, 'Fall in love with pesto all over again with this 10\" thin crust topped with spinach, red onions, fire roasted red peppers, goat cheese, mozzarella and pesto sauce.', 'images/9.jpg'),
(8, 'Half Moon Bread', 5.19, 'Take a 10-inch round of our signature dough, fold it over, then lather it in garlic butter and a delicious four-cheese blend and bake to perfection. Watch people go TOTALLY CRAZY. Any questions??', 'images/11.jpg'),
(9, 'Chipotle Chicken', 11.69, 'Smoky, zesty and bold - This Southwest-style flavor-bomb is set off with smoky chipotle sauce, then topped with chipotle chicken, zesty red onions, and melty mozzarella. Me gusta?', 'images/7.jpg'),
(10, 'Greek', 13.79, 'Say \"Opa\" and grab a slice - This delicious, Greek-inspired pie is legendary, taking you on an odyssey of salty kalamata olives, fresh spinach, tangy red onions, and crumbly feta cheese.', 'images/10.jpg'),
(11, 'Garlic Bread', 4.49, 'Is there a more classically crushable side-dish to go with a hot pizza? We think not, sir. Tear off a chunk of our thick-cut, country-style bread, brushed with rich garlic butter.', 'images/8.jpg'),
(12, 'Mexican Green', 14.99, 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.\r\n\r\n', 'images/17.jpg'),
(13, 'Garden Salad', 5.85, 'There\'s nothing like a market-fresh green salad! Enjoy cucumber slices, and ripe red grape tomatoes on a bed of fresh crisp iceberg lettuce. All with the dressing of your choice.', 'images/13.jpg'),
(14, 'Chicken Bites', 9.99, 'Boneless chunks of tender all-white meat, baked with a crispy,breading. Served with your choice of dipping sauce.', 'images/14.jpg'),
(15, 'Twin Pizza', 13.29, 'Create two masterpieces with our huge range of crusts, toppings and sauces.', 'images/15.jpg'),
(16, 'Bacon Double', 10.69, 'Cheeseburger. Pizza. Enough Said - Yeah, we did it. Crush two comfort-food classics in one, with ground beef, bacon crumble and four-cheese blend. Try it with Honey Mustard dipping sauce for extra burger bite!', 'images/16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpassword` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
