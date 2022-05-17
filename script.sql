create table categorie(
    idCategorie integer not null primary key auto_increment,
    nom varchar(20)
);
create table actu(
    id integer not null primary key auto_increment,
    dateI datetime,
    cat integer not null,
    titre varchar(250) not null,
    resume text not null,
    contenu text not null,
    url varchar(45) not null,
    image varchar(50) not null,
    foreign key (cat) references categorie(idCategorie)
);

/* apina url le table actu*/ 
/*String to slug*/

insert into categorie values (null,'Foret');
insert into categorie values (null,'Rechauffement');
insert into categorie values (null,'Climat');

insert into actu values(null,now(),2,'Captage du carbone, géo-ingénierie… Une commission mondiale se penche sur l’impact du dépassement climatique de 1,5 °C','Un groupe indépendant d’anciens dirigeants de pays du Nord et du Sud, présidé par Pascal Lamy, recommandera une stratégie pour réduire les risques liés à une hausse supérieure à l’objectif le plus ambitieux de l’accord de Paris.','C’est un seuil qui est associé au maintien d’un « avenir vivable » et à une question de « vie ou de mort » pour les petites îles en développement. Pourtant, il est désormais presque inévitable que l’objectif le plus ambitieux de l’accord de Paris sera bientôt franchi : le réchauffement climatique devrait dépasser 1,5 °C par rapport à l’ère préindustrielle au cours de cette décennie ou de la suivante.

Une commission mondiale sur la gouvernance des risques liés au dépassement climatique (Climate Overshoot Commission, en anglais) vient d’être lancée, mardi 17 mai, pour réfléchir d’ores et déjà à « l’après ». Ce groupe indépendant, composé de 16 membres, principalement des anciens dirigeants de pays du Nord et surtout du Sud, vise à élaborer une stratégie globale pour réduire les risques que comporte le dépassement de 1,5 °C, en examinant les avantages, les coûts et les défis entraînés par chacune des solutions possibles.

Le Groupe d’experts intergouvernemental sur l’évolution du climat (GIEC) n’a de cesse de le marteler : chaque fraction de degré compte et aggrave les impacts du réchauffement. Pour tenter de revenir au-dessous du seuil de 1,5 °C après l’avoir dépassé, les pays doivent réduire drastiquement et immédiatement leurs émissions de gaz à effet de serre. Les technologies de captage et déstockage, qui récupèrent le CO2 dans les fumées, de même que l’élimination du dioxyde de carbone déjà présent dans l’atmosphère, notamment par la plantation d’arbres ou la capture directe dans l’air, s’avéreront également nécessaires.','Captage-du-carbone-g-o-ing-nierie-Une-commission-mondiale-se-penche-sur-l-impact-du-d-passement-climatique-de-1-5-C','carbone.jpg');


create view fullActu as (
    SELECT a.id,a.dateI,a.titre,a.resume,a.contenu,a.url,c.nom,a.image,a.cat
    from actu as a 
    join categorie as c
    on a.cat=c.idCategorie
);

/*insert into actu values(null,now(),1,'tit','res','con','url','image');*/
insert into actu values(null,now(),1,'Transition écologique : « verdir » l’économie va peser sur les ménages et sur les entreprises','Dans une étude parue lundi, l’institut Rexecode chiffre entre 58 et 80 milliards d’euros par an le coût de la décarbonation de l’économie.','« L’écologie ? C’est un sujet trop sérieux pour le laisser aux seuls écologistes. » En sortant une de ses petites phrases favorites sur le sujet, Geoffroy Roux de Bézieux, le président du Medef, a donné le ton, lundi 16 mai. Alors que le deuxième mandat d’Emmanuel Macron doit s’ouvrir sous les auspices de la « planification écologique » – sujet censé être directement relié à Matignon, a promis le chef de l’Etat –, les entreprises comptent bien faire entendre leur voix dans le débat qui monte sur la manière de financer la transition climatique.

Pour ce faire, le Medef a demandé à l’institut de conjoncture Rexecode, proche de l’organisation patronale, de calculer le coût de la « décarbonation » de l’économie française : en clair, combien faudra-t-il investir pour respecter les objectifs climatiques nationaux, c’est-à-dire baisser de 40 % les émissions de gaz à effet de serre (GES) de la France d’ici à 2030 par rapport à 1990, et atteindre la neutralité carbone à l’horizon 2050 ?

La conclusion des économistes est sans appel : d’ici à 2030, entreprises, ménages et administrations devront investir de 58 à 80 milliards d’euros par an, soit de 2,1 % à 2,9 % de produit intérieur brut (PIB) supplémentaire, afin d’adapter le parc de véhicules, les bâtiments, le système énergétique ou encore les procédés industriels.

Ces estimations, obtenues en prolongeant les grandes tendances macroéconomiques d’émissions de GES mais aussi en analysant les sept principaux secteurs concernés (transport, industrie, agriculture, bâtiment, énergie, traitement des déchets et usage des terres et forêts), ont été réalisées avec une hypothèse de croissance du PIB modérée, de 0,9 % par an d’ici à 2030.','Transition-cologique-verdir-l-conomie-va-peser-sur-les-m-nages-et-sur-les-entreprises','transitionEco.jpg');
insert into actu values(null,now(),3,'Risques d’orages violents en Normandie et dans la Sarthe : six départements en vigilance orange','Des orages avec fortes pluies, grêle et rafales de vent sont attendus dans l’après-midi. La quasi-totalité du territoire français est en alerte jaune.','Après la vague de chaleur des derniers prédécents, Météo France a placé, dimanche 15 mai, six départements en vigilance orange, de la Normandie au Val-de-Loire, en raison d’orages attendus à partir du milieu de l’après-midi. Une grande partie du reste de l’Hexagone se trouve placé en vigilance jaune pour la même raison.

L’organisme fait état de risques d’« orages violents, avec précipitations intenses, grêle et fortes rafales de vent » qui pourraient toucher la Manche, le Calvados, la Seine-Maritime, l’Orne, l’Eure et la Sarthe, avant de s’atténuer dans la soirée. « Les cellules orageuses peuvent s’accompagner de brusques rafales de vent voisines de 80 à 100 kilomètres à l’heure, parfois un peu plus, ainsi que de chutes de grêle. Elles apportent également de fortes intensités pluvieuses, avec des cumuls de pluie pouvant être compris entre 20 et 40 millimètres en moins d’une heure. »','Risques-d-orages-violents-en-Normandie-et-dans-la-Sarthe-six-d-partements-en-vigilance-orange','vigilance.jpg');
insert into actu values(null,now(),2,'Le Pakistan et l’Inde font face à une canicule extrême, 50 degrés atteints par endroits','Depuis plusieurs semaines, les habitants de ces deux pays sont confrontés à des épisodes de canicule. Au Pakistan, les températures ont même dépassé les 50 degrés.','Depuis fin avril, de larges pans du Pakistan et de l’Inde connaissent une vague de chaleur record, dont l’Organisation météorologique mondiale (OMM) des Nations unies a estimé qu’elle était « cohérente » avec le changement climatique. Ces températures anormalement élevées perdurent – à certains endroits du Pakistan, les 50 degrés ont été atteints – alors que le mois de mai est habituellement le plus chaud dans ces régions de l’Asie du Sud.','Le-Pakistan-et-l-Inde-font-face-une-canicule-extr-me-50-degr-s-atteints-par-endroits','pakistan.jpg');
insert into actu values(null,now(),2,'Annick Girardin : « Face à l’urgence écologique, nous devons être des gens de mer, en collectif »','Alors que des représentants de la communauté maritime plaident, dans une tribune au « Monde », pour que le ministère de la mer soit pleinement engagé dans la transition écologique et la protection de l’océan, la ministre de la mer rappelle les trois piliers – économique, social et environnemental – sur lesquels s’ancre son ministère.','Depuis sa refondation en juillet 2020, la mise en œuvre d’une politique écologique a constitué une priorité évidente du ministère de la mer. Lorsque j’étais secrétaire d’Etat au développement et à la francophonie, et que la France, ainsi que 192 autres pays, a approuvé ces dix-sept objectifs de développement durable, en 2015, [les ODD, qui prennent, pour la période 2015-2030, le relais des Objectifs du millénaire, ou OMD, adoptés en 2000], j’ai fait le serment de conduire l’action publique au prisme des ODD. C’est du reste le combat que je mène pour éveiller les consciences sur les enjeux du développement durable depuis ma toute première élection à Saint-Pierre-et-Miquelon, en 2000. Ce combat, nous sommes désormais des millions à le porter. Il faut s’en réjouir !

Lire aussi : Article réservé à nos abonnés « Pour un ministère de la mer à la hauteur de la transition écologique ! »
La France a une grande responsabilité. La mer est un territoire, le ministère de la mer est le ministère de la planification, celui de la politique maritime intégrée. Certains pensent que la solution serait un retour de ce ministère dans le giron du ministère de la transition écologique. Je crois profondément que la solution est dans la prise en compte des trois piliers du développement durable.

Le ministère de la mer trouverait, à mon sens, toute sa place dans un grand ministère des territoires. Le ministère de la mer incarne les problématiques maritimes, il s’attache à reconnaître, à travers la planification de l’espace maritime, les spécificités de chaque territoire. Il a pour ambition de construire un savoir écologique qui permette d’ajuster les politiques publiques au plus près de ces spécificités locales.

Au cours de ces vingt derniers mois et de cent déplacements, j’ai rencontré des acteurs très engagés pour une politique maritime plus durable de la France. Leur voix doit être encore mieux entendue. Pour cela, il faut éviter la concertation pour la concertation. Elle doit éclairer la décision publique.

','Annick-Girardin-Face-l-urgence-cologique-nous-devons-tre-des-gens-de-mer-en-collectif','annickGi.jpg');


create table admin(
    id integer not null primary key auto_increment,
    email varchar(25) not null,
    mdp varchar(50) not null
);

insert into admin values(null,'larren@gmail.com',sha1('larren'));



