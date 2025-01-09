/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  12/02/2024 17:30:32                      */
/*==============================================================*/


drop table if exists COMPTE;

drop table if exists CONTENIR;

drop table if exists FACTURE;

drop table if exists PANIER;

drop table if exists PRODUIT;

/*==============================================================*/
/* Table : COMPTE                                               */
/*==============================================================*/
create table COMPTE
(
   IDCOMPTE             int not null,
   _NOM_FAC             varchar(60) not null,
   PRENOM_              varchar(60) not null,
   PASSWORD             varchar(40) not null,
   EMAIL                varchar(60) not null,
   TELEPHONE            int not null,
   primary key (IDCOMPTE)
);

/*==============================================================*/
/* Table : CONTENIR                                             */
/*==============================================================*/
create table CONTENIR
(
   IDPANIER             int not null,
   IDPRODUIT            int not null,
   primary key (IDPANIER, IDPRODUIT)
);

/*==============================================================*/
/* Table : FACTURE                                              */
/*==============================================================*/
create table FACTURE
(
   IDFACTURE            int not null,
   NOM_FAC              varchar(60) not null,
   MONTANT              int not null,
   DATE                 varchar(60) not null,
   primary key (IDFACTURE)
);

/*==============================================================*/
/* Table : PANIER                                               */
/*==============================================================*/
create table PANIER
(
   IDPANIER             int not null,
   IDCOMPTE             int not null,
   IDFACTURE            int,
   NOM_PANIER           varchar(60) not null,
   primary key (IDPANIER)
);

/*==============================================================*/
/* Table : PRODUIT                                              */
/*==============================================================*/
create table PRODUIT
(
   IDPRODUIT            int not null,
   NOM_PROD             varchar(60) not null,
   PRIX                 int not null,
   DISPONIBILITE        int not null,
   primary key (IDPRODUIT)
);

alter table CONTENIR add constraint FK_CONTENIR foreign key (IDPRODUIT)
      references PRODUIT (IDPRODUIT) on delete restrict on update restrict;

alter table CONTENIR add constraint FK_CONTENIR2 foreign key (IDPANIER)
      references PANIER (IDPANIER) on delete restrict on update restrict;

alter table PANIER add constraint FK_AVOIR foreign key (IDFACTURE)
      references FACTURE (IDFACTURE) on delete restrict on update restrict;

alter table PANIER add constraint FK_DISPOSER foreign key (IDCOMPTE)
      references COMPTE (IDCOMPTE) on delete restrict on update restrict;

