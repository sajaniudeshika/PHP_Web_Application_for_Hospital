-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2019 at 11:04 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suwapiyasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `apmt_cardi`
--

DROP TABLE IF EXISTS `apmt_cardi`;
CREATE TABLE IF NOT EXISTS `apmt_cardi` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `priscription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apmt_cardi`
--

INSERT INTO `apmt_cardi` (`fname`, `lname`, `nic_no`, `contact`, `priscription`, `date`) VALUES
('Saneth', 'Mahadoowage', '961551099v', '0713585633', 'Good', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `apmt_ent`
--

DROP TABLE IF EXISTS `apmt_ent`;
CREATE TABLE IF NOT EXISTS `apmt_ent` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `priscription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apmt_ent`
--

INSERT INTO `apmt_ent` (`fname`, `lname`, `nic_no`, `contact`, `priscription`, `date`) VALUES
('Saneth', 'Mahadoowage', '961551099v', '0713585633', 'good', '2018-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `apmt_eye`
--

DROP TABLE IF EXISTS `apmt_eye`;
CREATE TABLE IF NOT EXISTS `apmt_eye` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `priscription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apmt_eye`
--

INSERT INTO `apmt_eye` (`fname`, `lname`, `nic_no`, `contact`, `priscription`, `date`) VALUES
('Saneth', 'Mahadoowage', '961551099v', '0713585633', '6/6 vision', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `apmt_vog`
--

DROP TABLE IF EXISTS `apmt_vog`;
CREATE TABLE IF NOT EXISTS `apmt_vog` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `priscription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apmt_vog`
--

INSERT INTO `apmt_vog` (`fname`, `lname`, `nic_no`, `contact`, `priscription`, `date`) VALUES
('Saneth', 'Mahadoowage', '961551099v', '0713585633', 'Good', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `apmt_vp`
--

DROP TABLE IF EXISTS `apmt_vp`;
CREATE TABLE IF NOT EXISTS `apmt_vp` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `priscription` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apmt_vp`
--

INSERT INTO `apmt_vp` (`fname`, `lname`, `nic_no`, `contact`, `priscription`, `date`) VALUES
('Saneth', 'Mahadoowage', '961551099v', '0713585633', 'Good', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nic_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`no`, `fname`, `lname`, `nic_no`, `email`, `contact`, `doctor`, `date`) VALUES
(2, 'Saseni', 'Nimanda', '961565044v', 'ssmahadoowage@gmail.com', '0766444714', 'VOG', '2018-12-21'),
(3, 'Ruwan', 'Perera', '943251089v', 'ssmahadoowage@gmail.com', '0713585633', 'VOG', '2018-12-21'),
(4, 'Saj', 'Mahadoowage', '966551186v', 'ssmahadoowage@gmail.com', '0766444714', 'ENT', '2018-12-25'),
(5, 'Saneth', 'Mahadoowage', '961551099v', 'ssmahadoowage@gmail.com', '0713585633', 'ENT', '2018-12-28'),
(6, 'Saneth', 'Mahadoowage', '961551099v', 'ssmahadoowage@gmail.com', '0713585633', 'EYE', '2018-12-26'),
(7, 'Saneth', 'Mahadoowage', '961551099v', 'ssmahadoowage@gmail.com', '0713585633', 'VP', '2018-12-25'),
(8, 'Saneth', 'Mahadoowage', '961551099v', 'ssmahadoowage@gmail.com', '0713585633', 'Cardiologist', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `specialized_area` enum('ENT','VOG','Cardiologist','VP','EYE') NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`number`),
  KEY `nic_no` (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` enum('Staff','Admin','Doctor','') NOT NULL,
  `abstype` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `abstype`, `image`) VALUES
('961551099v', 'seth', '123456', 'Staff', 'Optition', 0x89504e470d0a1a0a0000000d49484452000001ce000001ce08030000002638198200000033504c54453289c83d8fca4995cc549bce60a1d06ba7d277add482b3d68db9d899bfdba4c5ddb0cbdfbbd1e1c7d7e3d2dde5dee3e7e9e9e9402f10d600000c1b4944415478daeddd6bbaa42a0c85e1a894858ac0fc477b7ef4fde9eed37b7b2324df9a41f91610a2a2546228c2258093c049e02470c249e024701238099c701238099c044e02279c044e02278193c009278193c049e02470c249e024701238099c701238099c044e02279c044e022781134e02278193c049e08493c049e024701238e124701238099c044e38099c044e022781134e02278193c049bc70a6b4c638875f33c7b8a454e0ecc8718d6192ffcf14e26251d5146749f135cac73386b815383526aff3244732ce6b865355b6f7286732ce4646a91818962fb92261c970b65e2d9749aecbd4bd68d79c178dcb5fc6e85ae06c917d1ee48e0cf30ee7e30333c87d99ba1da25d729638cabd196286f3a152f63dc80399339c0f60cef2543a0415302d8176c559e2200f672e70de94e5714c11196281f386a451da64dce0bc7cd17c49bb840c67fff3ec4f89705ed8cf9ba475c604e74589a221ef02a78da1f97580ee7076bf6af6b5822ae72c2fd19450e03c33d18ea22b4382f37056d19708e7c1cca231af02e7916573129d997638fb5f367f5a4077383f993488e2ac70765f04fd9c05cecff40e447b66383b2f697bf014342d790a9a963a7e82e6f10d6881d38ea6c80b4e439a0ad74f41d392a72ece55044f339cfd696aebf769e2dc45f034c3b90f5d72aababfa28753edfdcd7f7a66387f4f905ea3a89da086f32dfd6686d34051abf0f6a712ce4ecba0efd9e1b450067d2f870a9c36164e55dd78159c9bf49f05ce6f53ed6080534737410367100b99e0acb5f6f0d8dec712e1acb5e6c108a786dd4a7bce97154d0dd36d73ce4dec6471cf5906439cedefadb4e67c8ba5bc9c7366b195e49b3318e31c5d7326b196d533e7688eb3f1ad95a69cabd84bf4cb391ae46c3b3c5b72461186a7194e531d0425c353189c9686a7b0725a1a9eed38571186a71dced12c67c3e1d98c7313bb59fd7106c39ca33bce2c96b379e39c4d73be9c711a6d217c4ff6c5b9dad66cb65769c43919e71c5d7166b19ecd13e7db3ce7ec897334cf3938e2dc45986ded70be1d70ce7e3847079c831b4e0f736da3d9b6056774c1397be19c5c708e4e388bf8c8ee837375c2b9f8e09c9d70061f9ca3134e71c199bd68b678d953583a2dddf414964e4b8be7f39c931bcec103a7f8c96e9f3339e25ced732e8e38a37dced91167b0cf191c710ef639c5538a75ceec8a3359e74cae3817eb9cd1156784d3525ed639832bce00273b958e3807579c629dd397e6e3afed3ecc599c7126db9c094e38b94506a7cb3ec2c39c0b9c9638239c70c209a78acc70d2b485134e38e184134e38e184134e38e1a48d00279c705ae3dce0e47e279c70aa88f1874b76382d715638e1ec37d538e704a7254e5fefa84cd63967579ce6df20f3d5167a5be75c5d719a7ffbda571f61b3cee96ba7b29be71c3d7156f39c9e762a937d4e4fa5ed6c9fd3d31d4f0727667a3ac52dd9e7f474764975c0e9a7169a3c70faa985660f9c7efa42ab074e3f7da1ec82d3cbe2d9e2039e0d38234ba7254e2f4ff36d3e38bdec3c8b134e1f0f98b4f81a6b134e1f4f242c5e387d9c829abd70d6171d3e4b9c2b73ad25cec25c6b89d3c16cdb66ae6dc4b932d75ae2b4df4928ae38ad77125ed515a7f5beede68bd3f87b9e6375c669bb188ade386d1743d91da7e59bd87375c769f9f1e9dd1fa7e1bd4aa80e39ed0ecfe491d36ce3b6e1e06cc999189c96388d3e70db727036e5dc199c96384d16b74d07675bcecce0b4c459dfdc19b3c459cc756eb3674e731f4f7e57d79cc64e8d1a8a734e5bbd84b53ae734d5ea0bd53da7a56a28c369e8319358e1b4d3ba9d2a9cb5d66c64badde13434dd2a986a75709aa86e4385f35b75db7f3361c8701a6a266c15ce1fe9fda9dbb9c26967b7325538ed2c9f4a164e459c75ef78f7992a9c76769f4b85d34e39345738ff943e1fec0b15ce3fa7c757b2a702e7dfcadbfe3c07559aba38fbbb973dec154e33db156d9ada38fbf254a7a98eb32bcfadc269c773ad709af11c5285d38ca7be75532b67dd47340d71eaef278c3a359572d6a2fb76b6aece9e7e4eddfdf897564dbd9c8a5ffd9cd55e33c59c75535ae0ae15ce4305ee44496b88b3167d8fc78752e134b38046dd974b3ba7ae8e82cabe5e579cb5ccec4f0c71aaa9708745ffa5ea81534745147285f3aa01da7a051dd62eae53279cb5b43dbd6f2e15ce6b4bdc764df929f57291fae1ac751d29810c71d6121bd4b8b15438ad2ca173eeeafa74c6596b9ec134c4f920687f983d723eb3860e3d62f6c9596bb9b9ca1dfb2a807ae7acb5a6fb3a7f61ebf5a2f4cb596b5ec65b0666eef792f4cc596bdddfc3c52b66eafa7a74ce596bdde6f132cbadf78bd13f67ad758fe79f119bdec9c09530c1596b2deb89413ace6bb67119ac70d65a6bdedee1c0a83443698cf3cbc4bbc6f0b1713a84f79a8cfd7a739c5f37a55b8ce12fac4308efb82593bfdb28e78f0938fd9a6cfbe75ae7f41638e12470120f9cf93d6e26aee40e675d2791f6dfa4bd228b8c6fdf5f08ccdfef8784d239e6d7f72e5ec92d679abb7ad5eeff27daef1d8b7175c99942672fc2feff44fbf33fb3e58329a2035344a65e3b36bf9d81d410549460f6f6f6c08ffce9f5d366a0cf73e6d0f3ebcdbf0dcd59d59b2da2e4e77fbd08bd6d41d3df6fc635d94e3fccf9cf079e5fd9c0d0fcb6fdda6d73a60fdc58ee6805fdf7a10def6297f3a3679084bd0bccfc9127599e5e3d44d17fb9dd9ffac07ff3a35f4c7bf6888ca7383f77fa88fa93253e71f6c6a3ab87a81b9a1d9c47f0c9731a1e1ca0a26f686a3fc8e7f32f983eb7823ec1990e3ed1acf215cb72e833a34f9d64f300e789cfacaaab890ebf29fcd0b7006ee73c7748ffa0eabdd953af7d2f16384f7fe246cf5bed67dfe17f62c2bd99f392ef93ab00cdf3e957491fb805782fe755878c84d6db9674c92fb9ff998b3b39affcb6cdb8365c44d7cbbe31b0f6cb79f1871686b94d2f375ffac2fedc2be70ddff99b1e1fa265bdfaa0ce7b6fd1dfc6b9ca2d79f4fc8234df701ed5addf2f93be341f3c5d647fdf7414d59d1d859b38a3dc99f1f6317a9ba5c8ad1f4aba87f3fe531087f9b675b46cf3cd67fedde7297d6a7e5985e2f5d3eebe3c7148f96d1b50e957f34ba17821e9bebc1e3bce7aed86f3f1cf1285f7964f4fb0f1e14f07ac9d70b6f9c8d410e27a6c45dab78f1e5dd381a7d8d0fcb69a86b8a48faae6b4c657c34f84ae1d70aaf800dc10c23bc694fe209b534a4b8c21b4ffb0d91df5ad18d4ec2537785ecb19316aeb7929e78ad0273db3624e349bf7e32fe4dc07785a7b0a9a6d33ebe42c1334ed3d2fe34453433be12a4e369cc793d4712ea0a8d8ae5cc39930d151de5ec299296acfe5a58a9332e86c16459c94416acaa10b38e9ed5d510e15259c74832e49d0c14937e8a244159c2c9c9a96cfb39c1b0c9a96cf939cec3875ed3e4f72061054ed3ecf71d2aa55d6bc3dc5b9237071f3b629277b146dbb95339c3c86797df6669c4cb5faa65b61aab534dd0a55adb2e4269c34106e4a68c24903416333e12827bd5a95bddb839c65e4b2df96f971ce3717fdc6a4873933975ce7e653a8832c5543421d64a91a3ac4491da4b51a3ac249ebfdfeec8f7116fa416a7b4307387976ef896c0f71b2497924e3439c2f2ef523591fe1e4554ecd9b15a183a035f1014e06a7eae1290c4e4bc353189c9686a730382d0d4f61705a1a9ec2e0b4343c85c16969780a83d3d2f01406a7a5e1290c4e4bc3f3139cdc4a69313c6fe3e43e678bac377132389b64bc89932784da64bb859327841a25dcc2c9418aadb2dfc1c9b3b5ad32dfc0490ba15dcaf59c3cf0d5452b41d8a558daab08bb144b7b15a110d29fd7c59cbc01d836f95a4e0aa14e8a21a110b2540c7d889303be7a29868442c85231f4114e8ec6eca633f4114eee5bb7cf721d27b7c6da67ba8c934d673f5b4f61d3d947de1771162e653f5bcf7f73f218828eecd77032d77634db0a73ada5d956986b2dcdb6c25c6b69b6fd272797b1a7d956e821589a6d857e6d3789e739e9d7eac9749a937b639a92cf72f240a6a6ac6739f90aa0a6bc4e72d2125295e124272d215d49e738d9a674d618121ee1b3b45511b6293da59ce1e471696dd9ce707237a5b7c553e8f0595a3c85a5d3d2e229ec3a2d2d9ec2aed3d2e229ec3abb4a38cc49c356630e73723294c6a4a39cdcebd498e528274d048d998f725209f5d748102a214bb590500959aa85844ac8522d24f4842cf585848fe058ea0b09ef1a7596e11027e7f0694d39c24961db63692b3c27d45bd6239cec53b4261ee1a463ab35af239cec537adca9fc07c92a56ac17d23ae80000001974455874536f6674776172650041646f626520496d616765526561647971c9653c0000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `number` varchar(5) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `ot_rate` float NOT NULL,
  `basic_sal` float NOT NULL,
  `ot_hours` int(11) NOT NULL,
  `allowance` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`nic_no`),
  KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`number`, `nic_no`, `ot_rate`, `basic_sal`, `ot_hours`, `allowance`, `total`) VALUES
('s_01', '966552081v', 500, 2000, 2, 5000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `number` varchar(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  PRIMARY KEY (`number`),
  KEY `nic_no` (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`number`, `firstname`, `lastname`, `contact`, `email`, `type`, `nic_no`) VALUES
('s_01', 'Saneth', 'Mahadoowage', '0713585633', 'ssmahadoowage@gmail.com', 'Optition', '961551099v');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nic_no` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`nic_no`) REFERENCES `login` (`id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`number`) REFERENCES `staff` (`number`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`nic_no`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
