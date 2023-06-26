
--
-- Database: `shopping_tool`
--

CREATE DATABASE shopping_tool;
-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE shoppinglist (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- --------------------------------------------------------



