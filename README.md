# SAE_502 Piloter un projet informatique
### 1. Objectif
L'objectif de ce cahier des charges est de détailler les besoins techniques, fonctionnels et de sécurité pour l’équipement réseau et l’infrastructure informatique d’un hôpital de campagne. Cet hôpital doit être équipé d’un réseau sécurisé, d’une téléphonie intégrée, d’objets connectés pour l’automatisation des processus, et d’une connexion VPN. Les données des patients doivent être protégées et leur accès doit être strictement contrôlé suivant le niveau de responsabilité du personnel.
###2. Contexte
L’hôpital de campagne doit être opérationnel à distance grâce à une conception WAN (Wide Area Network), permettre une gestion efficace et cloisonnée des utilisateurs, ainsi qu'une sécurité renforcée via des mesures de cybersécurité. Ce réseau doit également intégrer des objets IoT pour la gestion des ressources, des locaux et des équipements médicaux.
###3. Équipements réseau requis
####3.1 Routeur
Nombre : 8+
Fonctionnalités : Sécurisation des flux entrants et sortants, configuration DMZ (Zone démilitarisée) pour l’accès public, segmentation du réseau interne.
Caractéristiques :
Support du VPN (Virtual Private Network) pour interconnecter l’hôpital de campagne avec d'autres hôpitaux.
Priorisation des flux pour les services critiques (médicaux, sécurité).
Compatibilité avec les protocoles de cybersécurité.
####3.2 Switch
Nombre : 4
Fonctionnalités : Répartition du réseau en plusieurs segments selon les services (médical, administration, sécurité).
Caractéristiques :
Support VLAN (Virtual LAN) pour cloisonner les réseaux par service.
PoE (Power over Ethernet) pour les équipements comme les caméras et téléphones IP.
###3.3 Pare-feu (Firewall)
Nombre : 3+
Fonctionnalités : Filtrage des accès, inspection des paquets, prévention des intrusions.
Caractéristiques :
Analyse en temps réel pour prévenir les attaques de type DDoS.
Fonctionnalités IPS (Intrusion Prevention System) et IDS (Intrusion Detection System).
###3.4 Téléphonie IP
Nombre de postes téléphoniques : 10 téléphones, 1 par salle (à confirmer).
Fonctionnalités : Téléphonie interne, interservice, et externe (liaison avec l’accueil).
Caractéristiques :
Système de communication VoIP intégré au réseau informatique.
Compatibilité avec les infrastructures de communication de l’hôpital distant.
###4. Sécurité réseau et cybersécurité
###4.1 Séparation des flux réseau
Mise en place d’une architecture réseau sécurisée : Les flux réseau doivent être segmentés pour éviter les intrusions entre les services (administration, médical, maintenance).
Isolation des réseaux :
Réseau pour les patients (données médicales).
Réseau pour l’administration.
Réseau pour les objets connectés (IoT).
###4.2 Authentification
Standard 802.1X et authentification centralisée via Radius : Gestion des accès sécurisés à travers l’authentification des utilisateurs, tant pour les postes fixes que pour les équipements mobiles.
###4.3 Accès restreint à certaines salles
Accès sécurisé aux salles critiques : Les salles d’opération ne seront accessibles qu’au personnel autorisé via des lecteurs de badges connectés.
Capteurs d’ouverture/fermeture des portes : Installation de capteurs pour vérifier l’ouverture ou la fermeture des portes sensibles (salles d’opération, zones de stockage des médicaments).
###4.4 Vidéosurveillance
Caméras de sécurité internes et externes : Déploiement de caméras IP pour surveiller l’intérieur et l’extérieur du bâtiment. L’accès aux flux vidéos sera restreint aux personnels autorisés.
###4.5 Données des patients
Accès contrôlé aux données médicales : Le personnel aura accès aux informations en fonction de leur niveau de responsabilité.
Stockage et gestion des données : Une base de données centralisée sera mise en place pour les patients et le personnel, sur des serveurs sécurisés.
###5. Objets connectés (IoT) et gestion des infrastructures
###5.1 Capteurs de sécurité
Capteurs de mouvement et d’ouverture/fermeture des portes : Assurer la sécurité des accès.
Capteurs d’air : Suivi de la qualité de l’air dans les salles de soins et d’opération.
###5.2 Contrôle d'accès
Lecteurs de badge et graveurs de badge : Mise en place d’un système de badge RFID pour l’accès au personnel et visiteurs autorisés.
###6. Gestion et maintenance
###6.1 Sauvegardes et reprise après sinistre
Sauvegardes régulières : Mise en place d’un système de sauvegarde des données (patients, logs d'accès, passages de badges) avec une politique de rétention claire.
Réinstallation automatique des serveurs : En cas de problème, une procédure de réinstallation automatisée permet la remise en service rapide des serveurs.
###6.2 Procédures de basculement
Serveur de secours : Un serveur de secours doit prendre le relais en cas de défaillance du serveur principal.
Rotation des rôles entre serveur principal et serveur de secours : Une procédure d’échange entre le serveur principal et le serveur de secours permettra de maintenir la disponibilité des services.
###6.3 Maintenance et astreinte
Contrats de maintenance : Élaboration de contrats de maintenance avec des délais d’intervention garantis.
Support en astreinte : Disponibilité de techniciens 24/7 pour gérer les urgences.
###7. Infrastructure réseau et accès distant
###7.1 Couverture Wifi
Couverture Wifi complète dans tout l’hôpital pour garantir la connectivité des personnels mobiles et des objets connectés.
###7.2 Interconnexion VPN
VPN sécurisé : Connexion VPN pour accéder au site de l'hôpital de chez nous.
###7.3 Téléphonie et communications
Téléphonie IP : Réseau de téléphonie interne pour la communication entre les différentes salles et services.
Interconnexion avec les services externes (standard et accueil).
###8. Outils de gestion
###8.1 Gestion de projet
Trello : Utilisation de Trello pour suivre les tâches de l’équipe projet.
###8.2 Collaboration et stockage
Google Drive : Stockage des documents partagés sur Google Drive.
###8.3 Gestion de version
GitHub : Gestion de version pour les configurations réseau et scripts d’automatisation.
###9. Budget Prévisionnel
Le budget prévisionnel pour l'équipement et la mise en place du réseau pour l'hôpital de campagne inclut les éléments suivants :
###9.1 Matériel Réseau
######1. Routeurs/Pare-feu (4 unités) 
Fortinet FortiGate 30E Firewall : 
   Prix unitaire : 706,79 €  
   Total estimé : 2 827,15€
######2. Switchs (12 unités) 

​​Alcatel-Lucent OmniSwitch 6360 : 
   Prix unitaire : 569,51€  
   Total estimé : 6 834,10€
######3. Téléphone IP
Cisco CP 7821 SIP : 
   Nombre estimé : 35 unités 
   Prix unitaire : 60,59€  
   Total estimé : 2 120,58€
######4. Caméras de vidéosurveillance IP 
AXIS M4327-P Panoramic Camera : 
   Nombre  : 10 unités  
   Prix unitaire : 534,96 €
   Total  : 5 349,60 €
######5. IPBX
Alcatel-Lucent OmniPCX Office
   Nombre  : 1 unité  
   Prix unitaire : 1 372,16€
   Total : 1 372,16€
######6. Borne Wifi
Alcatel-Lucent OmniAccess Stellar AP1221
   Nombre : 25 unités  
   Prix unitaire : 451,22€
   Total : 11 280,60€
######7. Poste de travail (Ordinateur, périphérique)
   Nombre : 12 unités  
   Prix unitaire : 900 €
   Total : 16 200,00 €
######8. Tablette
   Nombre : 60 unités  
   Prix unitaire : 1200 €
   Total : 72 000,00 €
###9.2 Infrastructures de Sécurité et IoT
######1. Capteurs de mouvement, fumée, Co2 et Température, ESP   
   Nombre : 60 unités
   Prix unitaire : 44,03€ 
   Total : 2 641,68€
######2. Systèmes de contrôle d'accès (lecteurs et graveurs de badges) 
   Nombre : 5 unités  
   Prix unitaire : 118,80€  
   Total : 594,00€
Le coût total pour le matériel est estimé à 121 219,87€.
###9.3 Maintenance et Support
######1. Contrats de maintenance (équipement réseau sécurité)  
   Coût annuel estimé : 17 258 €
###9.4 Coûts d'Installation et de Déploiement

L'installation et la mise en place de l'infrastructure réseau, des équipements IoT, ainsi que la configuration des systèmes de sécurité et de téléphonie IP seront assurées par l'équipe technique. Les coûts d'installation sont détaillés comme suit :

######1. Installation des équipements réseau (routeurs, switchs, pare-feu)
  
   Nombre d'unités : 15  
   Temps estimé : 5 jours de travail   
   Total estimé : 17 210 €

######2. Installation et configuration des systèmes de téléphonie IP
 
   Temps estimé : 2 jours de travail   
   Total estimé : 11 100 €

######3. Installation des systèmes de vidéosurveillance et des capteurs IoT
  
   Temps estimé : 3 jours de travail   
   Total estimé : 11 500 €

######4. Installation et configuration des systèmes de contrôle d’accès (lecteurs/graveurs de badge) 
 
   Temps estimé : 1 jour de travail  
   Total estimé : 1 450 €

######5. Tests et validation des systèmes installés 
 
   Temps estimé : 2 jours de tests et de validation par l’équipe technique   
   Total estimé : 11 100 €

Le coût total pour l'installation est estimé à 51 360 €, en fonction de la durée des interventions et du matériel installé. Ces coûts comprennent le travail de l’équipe technique pour la mise en place, la configuration des équipements, ainsi que les tests et la validation du bon fonctionnement des systèmes.
###9.5 Ajustements et Prévisions de Déploiement
Le déploiement sera ajusté en fonction des contraintes logistiques et des besoins spécifiques du projet. Un planning détaillé sera fourni avant le début des travaux afin d'assurer une coordination efficace avec les équipes du client.

Le budget global pour le projet, incluant l'installation, s'élève donc à 172 580 €. Prenant en compte le matériel, l'installation et les services associés. Un contrat de maintenance et un support technique peuvent être ajoutés au budget global. 
