DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `FirstName` varchar(45) NOT NULL,
    `LastName` varchar(45) NOT NULL,
    `Email` varchar(45) NOT NULL,
    `Password` varchar(45) NOT NULL,
    PRIMARY KEY (`ID`)
);


DROP TABLE IF EXISTS `UserData`;

CREATE TABLE `UserData` (
    `ID` INT,
    `Ticker` varchar(45),
    FOREIGN KEY (`ID`) REFERENCES `Users` (`ID`),
    FOREIGN KEY (`Ticker`) REFERENCES `SupportedStocks` (`Ticker`),
    `NumberOfShares` INT,
    `PricePaidPerShare` FLOAT
);


DROP TABLE IF EXISTS `SupportedStocks`;


CREATE TABLE `SupportedStocks` (
    `Ticker` varchar(45),
    PRIMARY KEY (`Ticker`),
    `CompanyName` varchar(45),
    `CurrentPrice` FLOAT
);
