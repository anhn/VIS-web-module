DROP TABLE IF EXISTS `ProductMaster`;
CREATE TABLE `ProductMaster` (
`ProductID` varchar(10) NOT NULL default '0',
`ProductName` text,
`VnProductName` text,
`AlternativeID` varchar(36),
`FamilyID` varchar(36) NOT NULL default '0',
`CategoryID` varchar(36) NOT NULL default '0',
`Description` text,
`CurrencyID` varchar(36) NOT NULL default '0',
`BarcodeID` varchar(10) NOT NULL default '0',
`BasePrice` decimal(18,2),
`PhysicalStockLevel` decimal(18,2),
`SafetyLevel` decimal(18,2),
`MinLevel` decimal(18,2),
`MaxLevel` decimal(18,2),
`ReorderLevel` decimal(18,2),
`SafetyStockFactor` decimal(18,4),
`HoldingCost` decimal(18,2),
`Qty` decimal(18,2),
`Type` varchar(36),
`UOMID` varchar(36),
`EngShortDesc` text,
`VnShortDesc` text,
`EngLongDesc` text,
`VnLongDesc` text,
`Photo` longblob,
`IsPromotion` varchar(1),
`ReservedField1` text,
`ReservedField2` text,
`ReservedField3` text,
`ReservedField4` text,
`Remarks1` text,
`Remarks2` text,
`ViewStatus` varchar(1),
PRIMARY KEY (`ProductID`)
);

DROP TABLE IF EXISTS `ProductDetail`;
CREATE TABLE `ProductDetail` (
`ID` varchar(36) NOT NULL default '0',
`ProductID` varchar(10) NOT NULL default '0',
`SupplierID` varchar(36) NOT NULL default '0',
`TransactionDate` timestamp NOT NULL default '0000-00-00 00:00:00',
`InvID` varchar(36),
`LeadTimeMin` decimal(18, 2),
`LeadTimeMax` decimal(18, 2),
`Qty` decimal(18, 2),
`BookedQty` decimal(18, 2),
`Cost1` decimal(18,2),
`Cost2` decimal(18,2),
`CostDiscount1` decimal(18,2),
`CostDiscount2` decimal(18,2),
`Price1` decimal(18,2),
`Price2` decimal(18,2),
`Price3` decimal(18,2),
`PriceDiscount1` decimal(18,2),
`PriceDiscount2` decimal(18,2),
`PriceDiscount3` decimal(18,2),
`TaxID1` varchar(36),
`TaxID2` varchar(36),
`LocationID` varchar(36),
`ExpiredDate` timestamp NOT NULL default '0000-00-00 00:00:00',
`ShowOnWeb` varchar(1),
`ViewStatus` varchar(1),
`UserID` varchar(36),
`Timestamp` timestamp NOT NULL default '0000-00-00 00:00:00',
`TransactionType` varchar(1),
PRIMARY KEY (`ID`)
);

DROP TABLE IF EXISTS `Outlet`;
CREATE TABLE `Outlet` (
`ID` varchar(36) NOT NULL default '0',
`Name` varchar(10),
`Notes` text,
`ViewStatus` varchar(1),
`User` varchar(36),
`Date` timestamp NOT NULL default '0000-00-00 00:00:00',
PRIMARY KEY (`ID`)
);

DROP TABLE IF EXISTS `ProductInOutlet`;
CREATE TABLE `ProductInOutlet` (
`ID` varchar(36) NOT NULL default '0',
`ProductID` varchar(10) NOT NULL default '0',
`OutletID` varchar(36) NOT NULL default '0',
`Price` decimal(18,2) ,
`Discount` decimal(18,2) ,
PRIMARY KEY (`ID`)
);

DROP TABLE IF EXISTS `CharacteristicType`;
CREATE TABLE `CharacteristicType` (
`ID` varchar(36) NOT NULL default '0',
`Name` varchar(10),
`Notes` text,
`ViewStatus` varchar(1),
`User` varchar(36),
`Date` timestamp NOT NULL default '0000-00-00 00:00:00',
PRIMARY KEY (`ID`)
);

DROP TABLE IF EXISTS `ProductCharacteristics`;
CREATE TABLE `ProductCharacteristics` (
`ID` varchar(36) NOT NULL default '0',
`ProductID` varchar(10) NOT NULL default '0',
`CharacteristicTypeID` varchar(36) NOT NULL default '0',
`Name` text,
PRIMARY KEY (`ID`)
);

DROP TABLE IF EXISTS `ProductCategory`;
CREATE TABLE `ProductCategory` (
`CategoryID` varchar(36) NOT NULL default '0',
`CategoryName` text,
`ParentCategoryID` varchar(36),
`Status` varchar(36),
`Description` text,
`ViewStatus` varchar(1),
PRIMARY KEY (`CategoryID`)
);

DROP TABLE IF EXISTS `ProductFamily`;
CREATE TABLE `ProductFamily` (
`FamilyID` varchar(36) NOT NULL default '0',
`Name` text,
`Status` varchar(36),
`Description` text,
`ViewStatus` varchar(1),
PRIMARY KEY (`FamilyID`)
);
