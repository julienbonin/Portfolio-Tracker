DROP TABLE IF EXISTS `UserData`;
DROP TABLE IF EXISTS `Users`;
DROP TABLE IF EXISTS `SupportedStocks`;

CREATE TABLE `Users` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`ID`),
    `FirstName` varchar(45) NOT NULL,
    `LastName` varchar(45) NOT NULL,
    `Email` varchar(45) NOT NULL,
    `Password` varchar(45) NOT NULL
);

CREATE TABLE `SupportedStocks` (
    `Ticker` varchar(45),
    PRIMARY KEY (`Ticker`),
    `CompanyName` varchar(45),
    `CurrentPrice` FLOAT
);

CREATE TABLE `UserData` (
    `ID` INT,
    `Ticker` varchar(45),
    FOREIGN KEY (`ID`) REFERENCES `Users` (`ID`) ON DELETE CASCADE,
    FOREIGN KEY (`Ticker`) REFERENCES `SupportedStocks` (`Ticker`) ON DELETE CASCADE,
    `NumberOfShares` INT,
    `PricePaidPerShare` FLOAT
);

INSERT INTO `SupportedStocks` (`Ticker`, `CompanyName`, `CurrentPrice`) Values ('AAPL', 'Apple Inc', '125.00');
INSERT INTO `SupportedStocks` (`Ticker`, `CompanyName`, `CurrentPrice`) Values ('AMD', 'Advanced Micro Devices, Inc.', '78.15');
INSERT INTO `SupportedStocks` (`Ticker`, `CompanyName`, `CurrentPrice`) Values ('NVDA', 'NVIDIA Corp.', '510.00');
INSERT INTO `SupportedStocks` (`Ticker`, `CompanyName`, `CurrentPrice`) Values ('YETI', 'YETI Holdings', '55.70');