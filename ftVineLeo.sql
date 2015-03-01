

CREATE TABLE `ProductMaster` (
'ProductID' nchar(10) NOT NULL,
'ProductName' nvarchar(max)  collate latin1_general_ci default NULL,
'VnProductName' nvarchar(max)  collate latin1_general_ci default NULL,
'AlternativeID' varchar(36)  collate latin1_general_ci default NULL,
'FamilyID' varchar(36) NOT NULL default '0',
'CategoryID' varchar(36) NOT NULL default '0',
'Description' nvarchar(max) collate latin1_general_ci default NULL,
'CurrencyID' varchar(36) NOT NULL default '0',
'BarcodeID'	nchar(10) NOT NULL default '0',
'BasePrice'	currency collate latin1_general_ci,
'PhysicalStockLevel' decimal(18,2) collate latin1_general_ci,
'SafetyLevel' decimal(18,2) collate latin1_general_ci,
'MinLevel' decimal(18,2) collate latin1_general_ci,
'MaxLevel' decimal(18,2) collate latin1_general_ci,
'ReorderLevel' decimal(18,2) collate latin1_general_ci,
'SafetyStockFactor' decimal(18,4) collate latin1_general_ci,
'HoldingCost' decimal(18,2) collate latin1_general_ci,
'Qty' decimal(18,2) collate latin1_general_ci,
'Type' varchar(36) collate latin1_general_ci,
'UOMID' varchar(36) collate latin1_general_ci,
'EngShortDesc' nvarchar(max) collate latin1_general_ci default NULL,
'VnShortDesc' nvarchar(max) collate latin1_general_ci default NULL,
'EngLongDesc' nText collate latin1_general_ci,
'VnLongDesc' nText collate latin1_general_ci,
'Photo' varbinary(MAX) collate latin1_general_ci,
'IsPromotion' bit collate latin1_general_ci,
'ReservedField1' nvarchar(max) collate latin1_general_ci,
'ReservedField2' nvarchar(max) collate latin1_general_ci,
'ReservedField3' nvarchar(max) collate latin1_general_ci,
'ReservedField4' nvarchar(max) collate latin1_general_ci,
'Remarks1' nvarchar(max) collate latin1_general_ci,
'Remarks2' nvarchar(max) collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
PRIMARY KEY  (`ProductID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'ProductDetail' (
'ID' varchar(36) NOT NULL,
'ProductID' nchar(10) NOT NULL default '0',
'SupplierID' varchar(36) NOT NULL default '0',
'TransactionDate' datetime NOT NULL default '0000-00-00 00:00:00',
'InvID' varchar(36) collate latin1_general_ci,
'LeadTimeMin' decimal(18, 2) collate latin1_general_ci,
'LeadTimeMax' decimal(18, 2) collate latin1_general_ci,
'Qty' decimal(18, 2) collate latin1_general_ci,
'BookedQty'	decimal(18, 2) collate latin1_general_ci,
'Cost1'	money collate latin1_general_ci,
'Cost2'	money collate latin1_general_ci,
'CostDiscount1'	money collate latin1_general_ci,
'CostDiscount2'	money collate latin1_general_ci,
'Price1' money collate latin1_general_ci,
'Price2'money collate latin1_general_ci,
'Price3' money collate latin1_general_ci,
'PriceDiscount1' money collate latin1_general_ci,
'PriceDiscount2' money collate latin1_general_ci,
'PriceDiscount3' money collate latin1_general_ci,
'TaxID1' varchar(36) collate latin1_general_ci default NULL,
'TaxID2' varchar(36) collate latin1_general_ci default NULL,
'LocationID' varchar(36)  collate latin1_general_ci default NULL,
'ExpiredDate' datetime NOT NULL default '0000-00-00 00:00:00',
'ShowOnWeb' bit collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
'UserID' varchar(36) collate latin1_general_ci,
'Timestamp' timestamp NOT NULL default '0000-00-00 00:00:00',
'TransactionType' bit collate latin1_general_ci,
PRIMARY KEY  (`ID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'Outlet' {
'ID' varchar(36) NOT NULL,
'Name' nchar(10) collate latin1_general_ci default NULL,
'Notes'	nvarchar(MAX) collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
'User' varchar(36) collate latin1_general_ci,
'Date' datetime NOT NULL default '0000-00-00 00:00:00',
PRIMARY KEY  (`ID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'ProductInOutlet' (
'ID' varchar(36) NOT NULL,
'ProductID' nchar(10) NOT NULL default '0',
'OutletID' varchar(36) NOT NULL default '0',
'Price' money  collate latin1_general_ci,
'Discount' money  collate latin1_general_ci,
PRIMARY KEY  (`ID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'CharacteristicType' (
'ID' varchar(36) NOT NULL,
'Name' nchar(10) collate latin1_general_ci default NULL,
'Notes'	nvarchar(MAX) collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
'User' varchar(36) collate latin1_general_ci,
'Date' datetime NOT NULL default '0000-00-00 00:00:00',
PRIMARY KEY  (`ID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'ProductCharacteristics' (
'ID' varchar(36) NOT NULL,
'ProductID' nchar(10) NOT NULL default '0',
'CharacteristicTypeID' varchar(36) NOT NULL default '0',
'Name' nvarchar(max) collate latin1_general_ci,
PRIMARY KEY  (`ID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'ProductCategory' (
'CategoryID' varchar(36) NOT NULL,
'CategoryName' nvarchar(MAX) collate latin1_general_ci,
'ParentCategoryID' varchar(36) collate latin1_general_ci,
'Status' varchar(36) collate latin1_general_ci,
'Description' nvarchar(MAX) collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
PRIMARY KEY  (`CategoryID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE 'ProductFamily' (
'FamilyID' varchar(36) NOT NULL,
'Name' nvarchar(MAX) collate latin1_general_ci default NULL,
'Status' varchar(36) collate latin1_general_ci,
'Description' nvarchar(MAX) collate latin1_general_ci,
'ViewStatus' bit collate latin1_general_ci,
PRIMARY KEY  (`FamilyID`)
)  ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
