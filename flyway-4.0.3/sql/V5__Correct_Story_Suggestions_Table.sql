drop table STORY_SUGGESTIONS;

create table STORY_SUGGESTIONS (
  P_ID int not null AUTO_INCREMENT,
  COUNTRY varchar(100) not null,
  SUGGESTION varchar(10000) not null,
  PRIMARY KEY (P_ID)
);