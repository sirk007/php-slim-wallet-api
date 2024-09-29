DROP DATABASE IF EXISTS walletBase;
CREATE DATABASE IF NOT EXISTS walletBase;
USE walletBase;

-- ------------------------------------------------------
-- Table structure for table `wallet`
--
DROP TABLE IF EXISTS `wallet`;
CREATE TABLE `wallet` (
  `id` 				int(11)			NOT NULL AUTO_INCREMENT,
  `name` 			varchar(45)		DEFAULT NULL,
  `token` 			varchar(45) 	DEFAULT NULL,
  `network` 		varchar(45) 	DEFAULT NULL,
  `utility` 		varchar(45) 	DEFAULT NULL,
  `quantity` 		varchar(45) 	DEFAULT NULL,
  `totalSupply` 	varchar(45) 	DEFAULT NULL,
  `picture` 		varchar(256) 	DEFAULT NULL,
  `description` 	varchar(256) 	DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `wallet`
--
INSERT INTO `wallet` VALUES 
(1,		'SpiritSwap',		'SPIRIT',		'Fantom',		'AMM-DEX',			'1000',		'1,000,000,000',	'JPEG',		'The SpiritSwap protocol adds incentives for Fantom network participants by introducing revenue sharing through the classic AMM model.'),
(2,		'SpookySwap',		'BOO',			'Fantom',		'AMM-DEX',			'1000',		'1,000,000,000',	'JPEG',		'SpookySwap is an automated market-making (AMM) decentralized exchange (DEX) for the Fantom Opera network.'),
(3,		'PaintSwap',		'BRUSH',	 	'Fantom',		'NFT-Market',		'1000',		'1,000,000,000',	'JPEG',		'PaintSwap is an open NFT marketplace supporting all NFTs, as well as a decentralized exchange and yield farming platform on Fantom.'),
(4,		'OlaFinance',		'RainSpirit',	'Fantom',		'Lend/Borrow',		'1000',		'1,000,000,000',	'JPEG',		'Ola Finance is a Lending-as-a-Service platform that allows anyone to create their own branded lending network at the click of a button.'),
(5,		'Fantom',			'FTM',			'Fantom',		'Platform',			'500',		'1,000,000,000',	'JPEG',		'Fantom is a highly scalable blockchain platform for DeFi, crypto dApps, and enterprise applications.'),
(6,		'Avalanche',		'AVAX',			'Avalanche',	'Platform',			'50',		'1,000,000,000',	'JPEG',		'Avalanche is a decentralized, open-source proof of stake blockchain with smart contract functionality. AVAX is the native cryptocurrency of the platform.'),
(7,		'Ethereum',			'ETH',			'Etherum',		'Platform',			'5',		'1,000,000,000',	'JPEG',		'Ethereum is a decentralized, open-source blockchain with smart contract functionality. Ether is the native cryptocurrency of the platform.'),
(8,		'USDC',				'USDC',			'Ethereum',		'Stable-Coin',		'100',		'1,000,000,000',	'JPEG',		'USDC Coin is a digital stablecoin pegged to the United States dollar.'),
(9,		'BUSD',				'BUSD',			'Binance',		'Stable-Coin',		'100',		'1,000,000,000',	'JPEG',		'BUSD Coin is a digital stablecoin pegged to the United States dollar.'),
(10,	'USDC',				'USDC',			'Binance',		'Stable-Coin',		'100',		'1,000,000,000',	'JPEG',		'USDC Coin is a digital stablecoin pegged to the United States dollar.');

UNLOCK TABLES;

-- ------------------------------------------------------
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` 			int(11)			NOT NULL AUTO_INCREMENT,
  `name` 		varchar(45)		DEFAULT NULL,
  `username` 	varchar(45) 	DEFAULT NULL,
  `password` 	varchar(45) 	DEFAULT NULL,
  `image` 		varchar(45) 	DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `wallet`
--

INSERT INTO `user_details` VALUES
(1, "Musk",		"Musky101",		"admin",	"musk.pfp"),
(2, "Trump",	"CashIsKing",	"admin",	"musk.pfp"),
(3, "Roger",	"RogerThat",	"admin",	"musk.pfp"), 
(4, "Mike",		"Mike183",		"admin",	"musk.pfp");
