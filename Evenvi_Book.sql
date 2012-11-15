-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mylib2
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Book`
--

DROP TABLE IF EXISTS `Book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookAuthor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookPrice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookPic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookContent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `bookOwner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookIsbn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookBorr` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Book`
--

LOCK TABLES `Book` WRITE;
/*!40000 ALTER TABLE `Book` DISABLE KEYS */;
INSERT INTO `Book` VALUES (2,'经济学原理','economic','[美] 曼昆 ','88.00','http://img3.douban.com/mpic/s1785715.jpg','此《经济学原理》的第3版把较多篇幅用于应用与政策，较少篇幅用于正规的经济理论。书中主要从供给与需求、企业行为与消费者选择理论、长期经济增长与短期经济波动以及宏观经济政策等角度深入浅出地剖析了经济学家们的世界观。','zhangsan','9787111126768',1),(4,'黑客与画家','计算机','[美] Paul Graham','48','http://img1.douban.com/mpic/s4669554.jpg','本书是硅谷创业之父Paul Graham 的文集，主要介绍黑客即优秀程序员的爱好和动机，讨论黑客成长、黑客对世界的贡献以及编程语言和黑客工作方法等所有对计算机时代感兴趣的人的一些话题。书中的内容不但有助于了解计算机编程的本质、互联网行业的规则，还会帮助读者了解我们这个时代，迫使读者独立思考。\r\n\r\n本书适合所有程序员和互联网创业者，也适合一切对计算机行业感兴趣的读者。','zhangsan','9787115249494',1),(9,'Python基础教程','计算机','Magnus Lie Hetland','22','http://img1.douban.com/mpic/s4387251.jpg','本书是经典教程的全新改版，作者根据Python 3.0版本的种种变化，全面改写了书中内容，做到既能“瞻前”也能“顾后”。本书层次鲜明、结构严谨、内容翔实，特别是在最后几章，作者将前面讲述的内容应用到了10个引人入胜的项目中，并以模板的形式介绍了项目的开发过程。本书既适合初学者夯实基础，又能帮助Python程序员提升技能，即使是 Python方面的技术专家，也能从书里找到令你耳目一新的东西。','zhangsan','9787115230270',2),(11,'浪潮之巅','计算机','吴军','34','http://img1.douban.com/mpic/s6584764.jpg','近一百多年来，总有一些公司很幸运地、有意识或无意识地站在技术革命的浪尖之上。在这十几年间，它们代表着科技的浪潮，直到下一波浪潮的来临。\r\n\r\n从一百年前算起，AT&T 公司、IBM 公司、苹果公司、英特尔公司、微软公司、思科公司、雅虎公司和Google公司都先后被幸运地推到了浪尖。虽然，它们来自不同的领域，中间有些已经衰落或正在衰落，但是它们都极度辉煌过。本书系统地介绍了这些公司成功的本质原因及科技工业一百多年的发展。\r\n\r\n在极度商业化的今天，科技的进步和商机是分不开的。因此，本书也系统地介绍了影响到科技浪潮的风险投资公司，诸如 KPCB 和红杉资本，以及百年来为科技捧场的投资银行，例如高盛公司，等等。\r\n\r\n在这些公司兴衰的背后，有着它必然的规律。本书不仅讲述科技工业的历史，更重在揭示它的规律性。','zhangsan','9787121139512',1),(14,'少年台湾','文学','蒋勋','34','http://img5.douban.com/mpic/s22783679.jpg','台湾著名作家，画家，美学大师蒋勋\r\n\r\n十年心血，最新力作，大陆地区首次出版\r\n\r\n岛屿上跨越十年的行走，孤独而青春的流浪笔记，踏进心灵原乡的美感对话\r\n\r\n——————————————————————————————————\r\n\r\n我不为什么，写了《少年台湾》，\r\n\r\n那些长久生活在土地里人的记忆，\r\n\r\n那些声音、气味、形状、色彩、光影，\r\n\r\n这么真实，这么具体，\r\n\r\n我因此相 信，也知道，岛屿天长地久，\r\n\r\n没有人可以使我沮丧或失落。\r\n\r\n这不是一本阅读的书，这本书阖起来，就可以背起背包，\r\n\r\n准备出发了。\r\n\r\n你，当然就是书中的 “少年”。\r\n\r\n——蒋勋','zhangsan','9787544732277',1),(15,'我开始轻视语言','0','张家瑜','29.50','http://img3.douban.com/mpic/s23129916.jpg','张家瑜是香港都市文学代表作家之一,生于台湾,旅美数年后定居香港。专栏文章散见于《晶报》《广州日报》《明报》《印刻》等报纸杂志。 《我开始轻视语言》是张家瑜第一本散文集,全书按主题分为五篇,包括童年回忆、香港漫谈、旅途见闻、阅读感悟、旁观社会……零落的生活片段,在她静谧优美的文字中呈现出独特样貌,营造起一种柔软的阅读气氛,亦串联起一条不曾间断的,始终移动的生命轨迹。著名文化人梁文道赞誉道：“张家瑜能够用文字探索到相当深的一些感观,她笔下的这些记忆,她看到的这些东西,在她写出来的时候,总会有一种很朦胧忧郁的一种的诗意。”作家马家辉更力荐本书为“年度最值得期待的书”。','zhangsan','97875133',1),(16,'Python学习手册','0','Mark Lutz','32','http://img3.douban.com/mpic/s3952568.jpg','《Python学习手册(第3版)》讲述了：Python可移植、功能强大、易于使用，是编写独立应用程序和脚本应用程序的理想选择。无论你是刚接触编程或者刚接触Python，通过学习《Python学习手册(第3版)》，你可以迅速高效地精通核心Python语言基础。读完《Python学习手册(第3版)》，你会对这门语言有足够的了解，从而可以在你所从事的任何应用领域中使用它。\r\n\r\n《Python学习手册(第3版)》是作者根据过去10年用于教学而广为人知的培训课程的材料编写而成的。除了有许多详实说明和每章小结之外，每章还包括一个头脑风暴：这是《Python学习手册(第3版)》独特的一部分，配合以实用的练习题和复习题，让读者练习新学的技巧并测试自己的理解程度。\r\n\r\n《Python学习手册(第3版)》包括：\r\n\r\n类型和操作——深入讨论Python主要的内置对象类型：数字、列表和...','zhangsan','97871112',1),(17,'web开发敏捷之道','0','托马斯（Thomas,D.） / 汉松（Hansson, D.H.）','95','http://img3.douban.com/mpic/s5843032.jpg','《Web开发敏捷之道:应用Rails进行敏捷Web开发(第2版)》内容简介：全书主要分为两大部分。在“构建应用程序”部分中，读者将看到一个完整的“在线购书网站”示例。在随后的“Rails框架”部分中，作者深入介绍了Rails框架的各个组件。除了上述两部分之外，对Rails缺乏了解的读者应该首先阅读“起步”部分，通过一个最简单的示例应用感性了解这个时下热门的web框架。不熟悉Ruby 的读者应该阅读“附录”部分中的“Ruby简介”，以便了解Ruby的基本语法与常见用法。\r\n\r\n《Web开发敏捷之道:应用Rails进行敏捷Web开发(第2版)》第1版曾荣获Jolt大奖“最佳技术图书”奖。在第1版的内容架构基础上，第2版增加了对Rails 1.2中新特性和最佳实践的介绍。相比第1版中的内容，Rails 1.2增加了数据迁移、RJS模板、集成测试框架等重要的新特性...','zhangsan','9787121042966',1),(18,'往西，宁静的方向','2','陈坤 / 慕容雪村 / 春晓 / 费勇 编 / 刘婷 摄','38','http://img3.douban.com/mpic/s23115301.jpg','《往西,宁静的方向》辑录了陈坤与志愿者对于行走的点滴感悟。陈坤不仅是一位优秀的演员，也是一个优秀的行动者和讲述者。在《往西,宁静的方向》中，既有他与著名作家慕容雪村的深刻对谈，也有行走志愿者自己的心路展现，既有陈坤与大学生的现场互动，也有费勇、春晓等好友对于行走的理解。整本书读来亲切自然，“行走的力量”通过不同方面的展现，也能让读者获得一次丰盈的心灵体验。“在心灵的国土上，自己做自己心灵的国王。”与陈坤一起，行走，观心。','zhangsan','9787807663928',2),(19,'那些我睡过的床','文学','文林','42','http://img3.douban.com/mpic/s22716811.jpg','《那些我睡过的床:中国27家风格酒店手札》内容简介：《那些我睡过的床》为旅途中的你挑选一张最满意的床。27家风格酒店的细腻体验。27段关于洁癖、瘾、恋物与美学的私旅行。香港人气作家欧阳应霁推荐并作序，作家阿Sam、张朴诚恳推荐。\r\n\r\n《那些我睡过的床》作者文林，一个极其挑剔的完美主义者，30岁出头，睡过全球各式风情的床，采访过大量个性迥异的名流、设计师，与世界顶尖设计师有过不同程度的艺术碰撞，眼光不逊于“半个设计师”。\r\n\r\n经他严苛甄选出来的每一张床，一定能够征服你。','zhangsan','9787508633695',1),(20,'共产党宣言','马列主义','马克思 / 恩格斯','0.28','http://img3.douban.com/mpic/s1988694.jpg','他们的目的只有用暴力推翻全部现存的社会制度才能达到。让统治阶级在共产主义革命面前发抖吧。无产者在这个革命中失去的只是锁链。他们获得的将是整个世界。 获得的是巨大的牢房','zhangsan','23223232323',1);
/*!40000 ALTER TABLE `Book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-11-09 13:32:20
