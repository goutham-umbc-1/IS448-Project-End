DROP TABLE IF EXISTS FAQPage_T;
DROP TABLE IF EXISTS FAQComment_T;

/* used for main FAQ question and answers, not implemented until ajax+javascript added */
create table FAQPage_T (
	faqID integer primary key not null auto_increment,
	dateUpdated date,
	faqCategory mediumtext,
	faqText longtext);

/* used for user comment submission */
create table FAQComment_T (
	faqCommentID integer primary key not null auto_increment,
	dateAdded date,
	userEmail varchar(200),
	commentText longtext);

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Voter Registration Eligibility', 'To register to vote, you must be:

A U.S. citizen;\n
A Maryland resident;\n and
At least 16 years old*.\n

You cannot have been:

Convicted of buying or selling votes;\n
Under guardianship for mental disability and found by a court to be unable to communicate a desire to vote;\n or
Convicted of a felony and currently serving a court-ordered sentence of imprisonment. (Effective March 10, 2016)\n
*You may register to vote if you are at least 16 years old but cannot vote unless you will be at least 18 years old by the next general election.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Voter Registration Eligibility', 'Certain U.S. citizens who live overseas or are in the military are eligible to register and vote in Maryland. If you are an overseas citizen, military personnel, or dependent of military personnel, you may register to vote in Maryland if your current or last U.S. residence was in Maryland.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Voter Registration Eligibility', 'Effective March 10, 2016, if you have been convicted of a felony, you are eligible to register to vote once you have completed the court-ordered sentence of imprisonment. For the purposes of eligibility to register to vote, convictions include federal, state and out-of-state convictions.\n
You are not eligible to vote if you have been convicted of buying or selling votes.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'How It Works', 'You can use our online voter registration application or submit a voter registration application to your local board of elections or the State Board of Elections at any time. However, an application must be postmarked by the voter registration deadline in order to vote in the next scheduled election. If you submit a voter registration application during the period that registration is closed, your application will be held at the local board of elections and processed when registration reopens.\n
You can also register to vote during early voting. To make the voting process quicker for you, we encourage you to register to vote by the close of voter registration. If you cant register by that date, go to an early voting center in the county where you live and bring a document that proves where you live. This document can be your MVA-issued license, ID card, or change of address card, or your paycheck, bank statement, utility bill, or other government document with your name and new address.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'How It Works', 'You can use online voter registration application to register to vote or, you may complete a voter registration application in person at:\n
Your local board of elections;\n
The State Board of Elections;\n
The Department of Health and Mental Hygiene;\n
The Department of Social Services;\n
The Motor Vehicle Administration (MVA);\n
Offices on Aging;\n
The MTA Paratransit Certification Office;\n
All public institutions of higher education;\n
Recruitment offices of the U.S. Armed Forces;\n
Marriage license offices;\n and
Offices for students with disabilities at all Maryland colleges and universities.\n
You can also register to vote during early voting. To make the voting process quicker for you, we encourage you to register to vote by the close of voter registration. If you cant register by that date, go to an early voting center in the county where you live and bring a document that proves where you live. This document can be your MVA-issued license, ID card, or change of address card, or your paycheck, bank statement, utility bill, or other government document with your name and new address.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'How It Works', 'You may register to vote online using our voter registration application or you may contact your local board of elections or the State Board of Elections to request an application.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'How It Works', 'In addition to basic identifying information, federal law requires that you provide on your voter registration application a Maryland driver’s license number or MVA ID Card number or, if you do not have a Maryland driver’s license or MVA ID Card, the last four digits of your social security number. Your application will NOT be processed unless you provide this information or affirm, under penalty of perjury, that you do not have a Maryland driver’s license, MVA ID Card, or social security number.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Registration Verification', 'You will receive a Voter Notification Card within three weeks.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Registration Verification', 'You can verify whether you are registered to vote by visiting our voter services function.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Registration Verification', 'Please contact your local board of elections. Or feel free to send us a support message.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Updating Registration', 'Please login to your user profile to update your information.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Updating Registration', 'You can update your information during early voting. While you can change your address during early voting, we encourage you to make this change before the close of voter registration. Your voting process will be quicker if you update it before this deadline.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Political Affiliation', 'Yes. To change your party affiliation you can use our online voter registration application or submit a new voter registration application or a signed written request to your local board of elections.');

INSERT INTO FAQPage_T(dateUpdated, faqCategory, faqText) VALUES (sysdate(), 'Political Affiliation', 'Democratic Party
(http://www.mddems.org/)\n
Republican Party
(http://www.mddems.org/)\n
Libertarian Party
(http://lpmaryland.org//)\n
Green Party
(http://www.marylandgreenparty.org/)\n');