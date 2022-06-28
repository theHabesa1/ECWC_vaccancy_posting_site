-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 07:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `postContent` varchar(9999) NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postTimestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `postTitle`, `postContent`, `postImage`, `postTimestamp`) VALUES
(60, 'Who is Arvind Kejriwal?', 'Early life and education\r\nArvind Kejriwal was born in an upper middle-class educated Agrawal [7] family in Siwani, Bhiwani district, Haryana on 16 August 1968, the first of the three children of Gobind Ram Kejriwal and Gita Devi. His father was an electrical engineer who graduated from the Birla Institute of Technology, Mesra. Kejriwal spent most of his childhood in north Indian towns such as Sonipat, Ghaziabad and Hisar. He was educated at Campus School in Hisar[8] and at a Christian missionary Holy Child School at Sonipat.[9]\r\n\r\nIn 1985, he took the IIT-JEE exam and scored All India Rank (AIR) of 563.[10] He graduated from Indian Institute of Technology Kharagpur, majoring in Mechanical engineering. He joined Tata Steel in 1989 and was posted in Jamshedpur. Kejriwal resigned in 1992, having taken leave of absence to study for the Civil Services Examination.[8] He spent some time in Calcutta (present-day Kolkata), where he met Mother Teresa, and volunteered with The Missionaries of Charity and at the Ramakrishna Mission in North-East India and at Nehru Yuva Kendra.[11]\r\n\r\nCareer\r\nArvind Kejriwal joined the Indian Revenue Service (IRS) as an Assistant Commissioner of Income Tax in 1995, after qualifying through the Civil Services Examination.[12] In November 2000, he was granted two years\' paid leave to pursue higher education on condition that upon resuming his work he would not resign from the Service for at least three years. Failure to abide by that condition would require him to repay the salary given during the leave period. He rejoined in November 2002. According to Kejriwal, he was not given any posting for almost a year, and kept getting his salary without doing any work; so, after 18 months, he applied for leave without pay.[13] For the next 18 months, Kejriwal was on sanctioned unpaid leave.[14] In February 2006, he resigned from his position as Joint Commissioner of Income Tax in New Delhi.[12] The Government of India claimed that Kejriwal had violated his original agreement by not working for three years. Kejriwal said that his 18 months of work and 18 months of unpaid absence amounted to the stipulated three-year period during which he could not resign and that this was an attempt to malign him due to his involvement with the Indian anti-corruption movement. The dispute ran for several years until, in 2011, it was resolved when he paid his way out of the Service with the help of loans from friends.[14] Kejriwal paid ₹ 927,787 as dues, but stated that this should not be considered as an admission of fault.[13]\r\n\r\nAfter joining politics, Kejriwal claimed in 2013 that he had chosen public service over earning crores as an Income Tax Commissioner. This led to a controversy, with the IRS association pointing out that he has never been promoted to the rank of Commissioner of Income Tax.[15]', '5f43e3a460e29.jpg', '2020-08-24 15:58:28'),
(61, 'Who is Narendra Damodar Das Modi?', 'Narendra Damodardas Modi (Gujarati pronunciation: [ˈnəɾendrə dɑmodəɾˈdɑs ˈmodiː] (About this soundlisten); born 17 September 1950) is an Indian politician serving as the 14th and current Prime Minister of India since 2014. He was the Chief Minister of Gujarat from 2001 to 2014 and is the Member of Parliament for Varanasi. Modi is a member of the Bharatiya Janata Party (BJP) and of the Rashtriya Swayamsevak Sangh (RSS), a Hindu nationalist volunteer organisation. He is the first prime minister outside of the Indian National Congress to win two consecutive terms with a full majority and the second to complete five years in office after Atal Bihari Vajpayee.[2]\r\n\r\nBorn to a Gujarati family in Vadnagar, Modi helped his father sell tea as a child and has said he later ran his own stall. He was introduced to the RSS at the age of eight, beginning a long association with the organisation. Modi left home after finishing high-school in part due to child marriage to Jashodaben Chimanlal Modi, which he abandoned and publicly acknowledged only many decades later. Modi travelled around India for two years and visited a number of religious centres before returning to Gujarat. In 1971 he became a full-time worker for the RSS. During the state of emergency imposed across the country in 1975, Modi was forced to go into hiding. The RSS assigned him to the BJP in 1985 and he held several positions within the party hierarchy until 2001, rising to the rank of general secretary.\r\n\r\nModi was appointed Chief Minister of Gujarat in 2001 due to Keshubhai Patel\'s failing health and poor public image following the earthquake in Bhuj. Modi was elected to the legislative assembly soon after. His administration has been considered complicit in the 2002 Gujarat riots,[a] or otherwise criticised for its handling of it. A Supreme Court-appointed Special Investigation Team found no evidence to initiate prosecution proceedings against Modi personally.[b] His policies as chief minister, credited with encouraging economic growth, have received praise.[10] His administration has been criticised for failing to significantly improve health, poverty and education indices in the state.[c]', '5f43e477840fe.jpg', '2020-08-24 16:01:59'),
(62, 'Donald Trump The Prime Minister Of USA', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, nobis ducimus a, obcaecati inventore quibusdam molestiae fugit quas maxime itaque hic recusandae dolores. Adipisci officia ducimus delectus illo, facilis temporibus possimus ab similique sint ipsum labore odio impedit explicabo laborum tempora quas deserunt voluptatibus error nam? Nemo rem aspernatur assumenda ab labore id ea, reprehenderit repellat, quasi facilis, dolore similique! Praesentium similique placeat, eligendi quis cum a commodi ex eum inventore sunt incidunt excepturi veniam deleniti dignissimos. Magni quae similique veritatis unde, pariatur obcaecati minima delectus quaerat mollitia! Quibusdam iure recusandae vero nostrum perspiciatis, dolorum, laudantium facere ad natus pariatur dignissimos sint explicabo sit similique nisi eos ducimus? Facilis fugit odit temporibus enim amet omnis et voluptates! Unde, soluta tenetur. Hic alias nostrum est corporis totam sit asperiores, facilis, quae sunt ex blanditiis assumenda maiores libero? Rerum inventore, nesciunt alias quasi dolores sed harum illo necessitatibus reiciendis error perferendis, laudantium, quam omnis? Odio suscipit ipsam eligendi, molestias aut quidem sint beatae repellat deleniti possimus animi eveniet placeat pariatur quis tempora. Nemo quas non molestias repellat accusamus nisi aut nesciunt eligendi. Unde libero facilis rerum magni. Maiores quis quam saepe cumque harum blanditiis, corporis consequuntur suscipit nobis a labore ducimus eligendi molestiae nostrum, sit adipisci. Aliquam eius facilis eveniet, explicabo recusandae, incidunt consectetur laboriosam natus ducimus quisquam rem architecto molestiae neque adipisci eum repudiandae dicta animi odit iure sit perferendis. Delectus, dolorem iusto! Inventore a unde, omnis rerum dolorum eos tempore culpa, praesentium ratione sint hic ab aut porro, commodi repellendus optio expedita quasi esse. Veniam eveniet facere voluptates ea earum quidem reiciendis accusamus veritatis a obcaecati unde suscipit consectetur, natus ex pariatur ipsa in nam similique! Aspernatur iusto voluptate laboriosam, fugit fuga, natus, excepturi quas corrupti consequatur ex a. Laudantium cum est explicabo illum quas ipsam non enim libero amet.', '5f43e4a06b2c4.jpg', '2020-08-24 16:02:40'),
(66, 'Sonia Gandhi To Remain Congress Party\'s Interim President For Now', 'New Delhi: Sonia Gandhi will remain the Congress\'s interim president for now, the party decided in the Congress Working Committee (CWC) meeting which concluded after 7 hours.\r\nDuring the meeting, it was also decided that the new Congress chief will be elected within next six months.\r\n\r\nSonia Gandhi reportedly said in her closing remarks that she held \"no ill-will\" towards anyone in the party, a remark intended at the dissent-letter writers. \"I am hurt but they are my colleagues, bygones are bygones, let us work together,\" she said, ending the Congress Working Committee (CWC) meeting on a note of conciliation.\r\n\r\nThe crucial meeting started at 11 this morning -- a day after an explosive letter written by 26 top leaders calling for \"a full-time, visible leadership\" emerged -- with Sonia Gandhi\'s letter asking to be relieved as Congress president and asking the party to begin deliberations to set in place a process to find her replacement. Mrs Gandhi\'s announcement led to statements in support of her and sharp criticism of the letter-writers, mainly by Rahul Gandhi who intervened twice to accuse the \"dissidents\" of collaborating with the BJP. \r\n\r\nOver 20 Congress leaders have, in a letter, called for a \"full-time\", \"effective leadership\" that will be \"visible\" and \"active\" in the field, sources said. It also called for \"honest introspection\" and suggested a \"collective leadership\", reforms including decentralisation of power, empowerment of state units and organizational elections at every level, sources said.\r\n\r\nNew Delhi: Sonia Gandhi will remain the Congress\'s interim president for now, the party decided in the Congress Working Committee (CWC) meeting which concluded after 7 hours.\r\nDuring the meeting, it was also decided that the new Congress chief will be elected within next six months.\r\n\r\nSonia Gandhi reportedly said in her closing remarks that she held \"no ill-will\" towards anyone in the party, a remark intended at the dissent-letter writers. \"I am hurt but they are my colleagues, bygones are bygones, let us work together,\" she said, ending the Congress Working Committee (CWC) meeting on a note of conciliation.\r\n\r\nThe crucial meeting started at 11 this morning -- a day after an explosive letter written by 26 top leaders calling for \"a full-time, visible leadership\" emerged -- with Sonia Gandhi\'s letter asking to be relieved as Congress president and asking the party to begin deliberations to set in place a process to find her replacement. Mrs Gandhi\'s announcement led to statements in support of her and sharp criticism of the letter-writers, mainly by Rahul Gandhi who intervened twice to accuse the \"dissidents\" of collaborating with the BJP. \r\n\r\nOver 20 Congress leaders have, in a letter, called for a \"full-time\", \"effective leadership\" that will be \"visible\" and \"active\" in the field, sources said. It also called for \"honest introspection\" and suggested a \"collective leadership\", reforms including decentralisation of power, empowerment of state units and organizational elections at every level, sources said.', '5f43ecc784640.jpg', '2020-08-24 16:37:27'),
(67, 'Vivo X50 Review', 'Vivo\'s recently launched X50 series is its most premium offering yet. We recently reviewed the Vivo X50 Pro (Review), which turned out to be an excellent 5G smartphone with a unique gimbal camera system. Today we\'ll be testing its less-hyped sibling, the Vivo X50. It lacks the gimbal camera system and 5G SoC that its bigger brother boasts of, but apart from these features, both phones are very similar. Add to that a Rs. 15,000 price difference between the two models\' base variants, and you have a strong mid-tier contender, on paper anyway.\r\n\r\nShould you pick the Vivo X50₹ 34,990 at its starting price of Rs. 34,990? I\'ve been using this phone for about a week and it\'s time to see if Vivo has hit another home run, just like with its bigger sibling.\r\n\r\nVivo X50 design and display: Very striking\r\nJust like the Vivo X50 Pro, the Vivo X50 looks striking from any angle and is easily one the best looking phones I\'ve seen from the company of late. It feels premium and well-built too, thanks to the metal frame and frosted glass back. Fun fact: units in the Frost Blue colour that I have are a tiny bit slimmer (7.49mm) and lighter (171.5g), than those in the Glaze Black trim. Vivo tells Gadgets 360 that the black variant uses a slightly different anti-fingerprint coating technique, which is why it\'s slightly thicker, although it didn\'t comment on the weight difference.\r\n\r\nThe matte finish of the Frost Blue variant looks good and it rarely attracted fingerprints in my experience. Just like the Vivo X50 Pro, the Vivo X50\'s frame is flattened on the top and bottom, lending it a distinct look. On the bottom, it has a dual Nano-SIM tray, a USB Type-C port (USB 2.0) and a single speaker. The volume and power buttons are on the right of the phone, and deliver good feedback.\r\n\r\nThe Vivo X50 has a 6.56-inch AMOLED display with a full-HD+ resolution, 90Hz refresh rate, and HDR10+ certification. I like the fact the bezels are fairly slim on all sides, including the bottom chin. There\'s a hole-punch cutout for the selfie camera and an in-display fingerprint sensor. The latter is very quick at authentication, and the same goes for face recognition too.\r\n\r\nFinally, the Vivo X50 does have a camera bump at the back, but its multi-tiered design masks the protrusion quite well. Overall, the Vivo X50 is a very well-built smartphone with a premium in-hand feel. The display is on the wider side, which could be a problem if you have smaller hands. Luckily, there are plenty of gestures in Funtouch OS to remedy this, which we\'ll talk about next. In the box, you get the usual accessories including a case, a headset, and a Type-C to 3.5mm headphone adapter.\r\n\r\nVivo X50 software: Bloated but still good\r\nThe Vivo X50 runs the same software as the X50 Pro, Funtouch OS 10.5, based on Android 10. There\'s a lot that\'s packed into this custom Android skin, starting with plenty of redundant apps such as Vivo\'s own app store, browser, and email client — none of which can be uninstalled. My unit even had a few apps such as TikTok and Helo, which have now been banned by the Indian government, but these can be uninstalled.', '5f43ed4e7350b.jpg', '2020-08-24 16:39:42'),
(68, 'Asus ZenBook UX425JA Review', 'Slim and light laptops are becoming more affordable, and it\'s always good to see manufacturers paying attention to what people really want. If, like me, you spend most of your day using a laptop and have to carry it with you wherever you go, it had better not become a burden. Thankfully modern laptops use slim SSDs and CPUs that don\'t require very heavy cooling, and of course it\'s safe now to drop optical drives and several legacy ports, all of which help.\r\n\r\nStill, while I do of course like having all the latest hardware and high-end specifications, usability is just as important as being able to check a bunch of boxes on a list. In particular, I look for a comfortable keyboard and trackpad, battery life, portability, and sturdiness. If these factors are not in place, the raw power, looks, and other bells and whistles hardly matter.\r\n\r\nThat\'s why I\'m reviewing the Asus ZenBook UX425JA today. This 14-inch ultraportable weighs just 1.17kg which is lighter than even the current-gen MacBook Air, but promises versatility and power. I\'ve been impressed with previous ZenBook UX-series models, so let\'s see what the latest one has in store.\r\n\r\nAsus ZenBook UX425JA design\r\nThe most striking aspect of the ZenBook UX425JA is just how thin and light it is. This is a 14-inch laptop that is smaller than some 13-inch models from not too long ago. It\'s also just 14mm thick at its thickest point. Asus says it has used an aluminium alloy for durability. The entire body is metal, including the keyboard deck and bottom. This model is available in a Pine Grey finish, which Asus describes as “calm” and “wise”, and I like the fact that there are no blingy gold accents this time.\r\n\r\nThe body actually looks somewhat blue-grey under bright light. There\'s an off-centre Asus logo on the lid, with the trademark Zen-series concentric circle design radiating out from it. The brushed metal effect is very subtle and you might not even notice it at first. Overall, this is a smart, professional-looking laptop that you can carry with you anywhere. The equivalent 13-inch ZenBook UX325 model is available only in Lilac Mist, which is a little less neutral.\r\n\r\nAsus claims that this is the world\'s thinnest 14-inch laptop with a full set of ports, but that\'s a contentious claim. Sure, you get a full-sized HDMI output and a standard USB Type-A port, which I do appreciate, but there\'s no 3.5mm audio socket. Like on modern smartphones, Asus apparently thought it would be okay to drop this basic, universal standard (which even Apple hasn\'t done on its most minimalist laptops) and I strongly disagree. You do get a dongle in the box — more on that later — but this will be a huge inconvenience in many situations.\r\n\r\nThe left and right screen borders are 2.9mm thin, but there\'s enough room above the screen for a webcam where it needs to be. That\'s important, since face recognition is another one of this laptop\'s selling points. At least modernity and practicality have been balanced here. The screen itself is non-glossy, which is great for productivity.\r\n\r\n\r\n\r\nOpening the lid inclines the lower half of the laptop at a relatively unnoticeable 3 degree angle. Asus says this improves ergonomics, but it\'s more to do with allowing better air intake through the vents on the bottom and exhaust from right above the hinge.\r\n\r\nOn the lower half we have a fairly well-spaced keyboard that nearly reaches the edges of the laptop\'s body. Immediately, I noticed the row of dedicated paging keys on the right, which I always like to see. The arrow keys are unfortunately compressed into one row, but are much wider than usual and are also slightly isolated, so they\'re easy to find by touch alone.\r\n', '5f43edae10b66.jpg', '2020-08-24 16:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `userBio` varchar(200) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userImage` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userBio`, `userPassword`, `userImage`, `timestamp`) VALUES
(1, 'Umair Farooqui', 'info.mufazmi@gmail.com', 'This is user is lazy, so they didn\'t written any bio.', 'farooqui', 'mufazmi.png', '2020-08-08 06:59:52'),
(2, 'Social Codia', 'socialcodia@gmail.com', 'This is user is lazy, so they didn\'t written any bio.', 'farooqui', 'mufazmi.png', '2020-08-24 15:47:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
