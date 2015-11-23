-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2011 at 07:24 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `magento1420`
--

-- --------------------------------------------------------

--
-- Table structure for table `magazento_megamenu_category`
--

CREATE TABLE IF NOT EXISTS `magazento_megamenu_category` (
  `category_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` text NOT NULL,
  `column` tinyint(4) NOT NULL DEFAULT '2',
  `position` tinyint(4) NOT NULL DEFAULT '0',
  `align_category` varchar(10) NOT NULL DEFAULT 'left',
  `align_content` varchar(10) NOT NULL DEFAULT 'right',
  `content_top` text CHARACTER SET utf8 COLLATE utf8_bin,
  `content_bottom` text CHARACTER SET utf8 COLLATE utf8_bin,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `magazento_megamenu_category`
--

INSERT INTO `magazento_megamenu_category` (`category_id`, `catalog_id`, `title`, `url`, `column`, `position`, `align_category`, `align_content`, `content_top`, `content_bottom`, `from_time`, `to_time`, `is_active`) VALUES
(2, 13, 'Electronics', '#', 2, 5, 'left', 'left', 0x3c68323e3220636f6c756d6e732063617465676f7279206c61796f75743c2f68323e0d0a3c703e596f752063616e20636f6d706c6574656c79206368616e6765206d656e75206f7220796f752063616e206c656176652069742061732069732c2074686973206d656e7520646f6573206e6f74206769766520796f7520616e792074726f75626c652e20416c6c207061727473206f66204d6567614d656e752061726520636f6d706c6574656c79206368616e676561626c6520696e207468652061646d696e6973747261746976652073656374696f6e2c20796f752063616e20616c736f206368616e6765206e616d6573206f722075726c206c696e6b732e2054686973206d656e75206973207265616c6c7920636f6e76696e69656e742e3c2f703e, '', '2009-11-06 10:46:36', '2011-03-12 02:45:00', 1),
(5, 10, 'Furniture', '#', 2, 2, 'left', 'left', 0x3c64697620636c6173733d22636f6c5f32223e0d0a3c68323e3220636f6c756d6e732063617465676f727920636f6e74656e743c2f68323e0d0a3c2f6469763e, '', '2011-02-27 16:47:02', NULL, 1),
(6, 18, 'Apparel', '#', 1, 12, 'left', 'left', 0x3c68323e3120436f6c756d6e3c2f68323e, 0x3c703e4353533320616e642043726f73732042726f7773657220537570706f72742e3c2f703e, '2001-03-12 16:52:09', '2016-03-31 16:52:09', 1),
(7, 3, 'Root', '/', 2, 1, 'left', 'left', '', 0x3c64697620636c6173733d22636f6c5f33223e0d0a3c68323e5468697320697320616e206578616d706c65206f662020726f6f742077697468203320636f6c756d6e733c2f68323e0d0a3c2f6469763e0d0a3c64697620636c6173733d22636f6c5f31223e0d0a3c7020636c6173733d22626c61636b5f626f78223e43726561742065646966666572656e7420636f6e74656e7420626c6c6f636b7320616e6420646973706c6179207468656d207769746820796f7520435353207374796c65733c2f703e0d0a3c2f6469763e0d0a3c64697620636c6173733d22636f6c5f31223e0d0a3c703e4372656174652062656175746966756c20626c6f636b732077697468206d6167656e746f2d667269656e646c7920696e74657266616365203c7374726f6e673e6174206261636b656e643c2f7374726f6e673e3c2f703e0d0a3c2f6469763e0d0a3c64697620636c6173733d22636f6c5f31223e3c696d67207372633d222f6d656469612f6d6167617a656e746f5f6d6567616d656e752f626573745f73656c6c696e675f696d6730322e706e672220616c743d22222077696474683d22393522206865696768743d22393522202f3e3c2f6469763e0d0a3c64697620636c6173733d22636f6c5f33223e456173696c79206368616e676520746f70206f7220626f74746f6d20636f6e74656e7420696e204d6567614d656e75206261636b656e642063617465676f72792073656374696f6e3c2f6469763e, '2011-03-13 23:18:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `magazento_megamenu_category_store`
--

CREATE TABLE IF NOT EXISTS `magazento_megamenu_category_store` (
  `category_id` smallint(6) unsigned DEFAULT NULL,
  `store_id` smallint(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magazento_megamenu_category_store`
--

INSERT INTO `magazento_megamenu_category_store` (`category_id`, `store_id`) VALUES
(2, 0),
(5, 0),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `magazento_megamenu_item`
--

CREATE TABLE IF NOT EXISTS `magazento_megamenu_item` (
  `item_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `column` tinyint(4) NOT NULL DEFAULT '2',
  `align_item` varchar(10) NOT NULL DEFAULT 'left',
  `align_content` varchar(10) NOT NULL DEFAULT 'right',
  `position` tinyint(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `columnsize` tinyint(4) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `magazento_megamenu_item`
--

INSERT INTO `magazento_megamenu_item` (`item_id`, `title`, `url`, `column`, `align_item`, `align_content`, `position`, `content`, `from_time`, `to_time`, `is_active`, `columnsize`) VALUES
(5, 'Text', 'sample-menu-item.html', 4, 'right', 'right', 17, '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding: 0px;"><strong>Lorem ipsum dolor sit amet </strong>consectetur adipiscing elit. Donec in fringilla felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce id tortor ut sem tincidunt tincidunt. Pellentesque adipiscing neque sit amet diam tincidunt suscipit. Mauris hendrerit lacinia metus sit amet ullamcorper. Ut vehicula urna eu nibh fringilla eget viverra elit rutrum. In faucibus accumsan ipsum. Nam quis ultricies leo. Ut vitae ipsum et orci venenatis lacinia. Pellentesque est risus, laoreet sed ullamcorper eu, viverra nec tellus. Vivamus leo nulla, ultrices in semper a, porttitor at arcu. Integer aliquam nisl lacus. Curabitur mi purus, tempor at eleifend sed, sagittis vel est. Nullam a lectus arcu, eu consequat eros. Etiam blandit gravida risus ac suscipit. Sed scelerisque nibh eu libero rhoncus at porttitor ante accumsan. Vestibulum elementum placerat congue.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding: 0px;"><strong>In eget convallis lorem.</strong> In tincidunt, libero ac venenatis bibendum, metus neque ullamcorper sapien, non iaculis sem nisl at mauris. Integer nec sapien urna, vitae elementum enim. Vestibulum est tortor, iaculis sit amet porta hendrerit, cursus et massa. Nullam sagittis ultrices fringilla. Praesent at tempor arcu. Sed ornare aliquam lectus, quis lobortis risus iaculis sed. In a ipsum id odio auctor consectetur. Maecenas consequat velit in neque dapibus in pulvinar tortor ornare. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut ultrices odio. Aliquam ac suscipit nibh. Integer non purus quam, vel facilisis nunc. Pellentesque orci nisi, congue nec cursus id, vehicula ac felis.</p>\r\n<p><img style="float: right;" src="/media/magazento_megamenu/logo.png" alt="" width="200" height="63" /></p>', '2011-03-09 12:00:00', '2011-03-12 12:00:00', 1, 0),
(9, 'YouTube', 'samble-flash.html', 5, 'right', 'right', 9, '\r\n<h3>Welcome to Magento</h3>\r\n<iframe title="YouTube video player" width="550" height="350" src="http://www.youtube.com/embed/BBvsB5PcitQ" frameborder="0" allowfullscreen></iframe>\r\n', '2011-03-14 01:52:21', '2016-07-14 01:52:21', 1, 0),
(10, 'Forms', '#', 5, 'right', 'right', 1, '<form id="contactForm" action="http://magento1420.dev/contacts/index/post/" method="post">\r\n<h2 class="legend">Contact Information</h2>\r\n<ul class="form-list">\r\n<li>\r\n<div class="field"><label class="required" for="name"><em>*</em>Name</label>\r\n<div class="input-box"><input id="name" class="input-text" title="Email" name="name" type="text" value="John Doe" /></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class="field"><label class="required" for="email"><em>*</em>Email</label>\r\n<div class="input-box"><input id="email" class="input-text" title="Email" name="email" type="text" value="sample@mail.com" /></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class="field"><label class="required" for="name"><em>*</em>Telephone</label>\r\n<div class="input-box"><input id="telephone" class="input-text" title="Telephone" name="telephone" type="text" value="+1 0000 0000" /></div>\r\n</div>\r\n</li>\r\n<li class="wide"> <label class="required" for="comment"><em>*</em>Comment</label>\r\n<div class="input-box"><textarea id="comment" class="required-entry input-text" title="Comment" cols="5" rows="3" name="comment">Write message here ... </textarea></div>\r\n</li>\r\n</ul>\r\n<div class="buttons-set">\r\n<p class="required">* Required Fields</p>\r\n<input id="hideit" style="display: none !important;" name="hideit" type="text" /> <button class="button" title="Submit"><span><span>Submit</span></span></button></div>\r\n</form>', '2011-03-14 09:16:00', '2015-03-14 02:16:45', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `magazento_megamenu_item_store`
--

CREATE TABLE IF NOT EXISTS `magazento_megamenu_item_store` (
  `item_id` smallint(6) unsigned DEFAULT NULL,
  `store_id` smallint(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magazento_megamenu_item_store`
--

INSERT INTO `magazento_megamenu_item_store` (`item_id`, `store_id`) VALUES
(9, 0),
(5, 0),
(10, 0);
