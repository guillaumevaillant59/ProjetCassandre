# Dictionnaire des données

|**CONCEPTUAL nom**|**CODE**|**DESCRIPTION**|**TYPE(LENGTH)**|**TABLE**||
|-------------------|--------|---------------|----------------|---------|:---:|
|Id_Utilisateur| Utilisateur_id|Id, PK|INT|Utilisateur|🟩|
|nom|Utilisateur_nom|nom|VARCHAR(30)|Utilisateur|🟩|
|prenom|Utilisateur_prenom|prenom|VARCHAR(30)|Utilisateur|🟩|
|email|Utilisateur_email|email|VARCHAR(30)|Utilisateur|🟩|
|password|Utilisateur_pass|password|VARCHAR(30)|Utilisateur|🟩|
|Creation|Utilisateur_creation|Creation|DATE|Utilisateur|🟩|
|Id_role|role_id|Id, PK|INT|role|🟥|
|code|role_code|code|VARCHAR(30)|role|🟥|
|Id_Adresse|adr_id|Id, PK|INT|Adresse|🟦|
|numero|adr_num|numero|VARCHAR(30)|Adresse|🟦|
|rue|adr_rue|rue|VARCHAR(30)|Adresse|🟦|
|complementaire|adr_compl|Adresse complementaire|VARCHAR(50)|Adresse|🟦|
|postale|adr_postale|postale|VARCHAR(30)|Adresse|🟦|
|ville|adr_ville|ville|Varchar(30)|Adresse|🟦|
|pays|adr_pays|pays|Varchar(20)|Adresse|🟦|
|dans_eu|adr_eu|union europeen|LOGICAL|Adresse|🟦|
|Id_Facture|Facture_id|Id, PK|INT|Facture|🟪|
|numero|Facture_num|numero|VARCHAR(30)|Facture|🟪|
|statut|Facture_stat|statut|LOGICAL|Facture|🟪|
|prix_horstaxe|Facture_prix_horstaxe|prix hors taxe| DECIMAL(6,2)|Facture|🟪|
|prix_toutestaxe|Facture_prix_toutestaxe|prix toutes taxe| DECIMAL(6,2)|Facture|🟪|
|Id_taxe|taxe_id|Id, PK|INT|taxe|🟨|
|taux|taxe_taux|taux taxe|DECIMAL(2,2)|taxe|🟨|
|Id_audit|audit_id|Id, PK|INT|audit|⬛|
|type|audit_type|type|VARCHAR(30)|audit|⬛|
|Creation|audit_creation|creation|DATE|audit|⬛|
|fin|audit_fin|fin|DATE|audit|⬛|
|statut|audit_statut|statut|VARCHAR(30)|audit|⬛|
|Id_rapport|rapport_id|Id, PK|INT|rapport|🟧|
|type|rapport_type|type|VARCHAR(30)|rapport|🟧|
|nom|rapport_nom|nom|VARCHAR(30)|rapport|🟧|
|chemin|rapport_chemin|chemin|VARCHAR(125)|rapport|🟧|
|poids|rapport_poids|poids|INT|rapport|🟧|
|Creation|rapport_creation|creation|DATE|rapport|🟧|
|Id_client|client_id|Id, PK|INT|client|⬜|
|nom|client_nom|nom|VARCHAR(50)|client|⬜|
|statut|client_statut|statut|VARCHAR(20)|client|⬜|
|siret_numero|client_siret|siret numero|VARCHAR(30)|client|⬜|
|telephone_numero|client_telephone|telephone numero|VARCHAR(30)|client|⬜|