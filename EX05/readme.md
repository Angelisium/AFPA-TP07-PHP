# Exercice 5
Créer une classe et utiliser PHP comme un langage de programmation objet.

*Enoncé*
---
- Dans un fichier index.php créer un formulaire contenant une zone de saisie
pour le nom, le revenu et un bouton OK pour soumettre le formulaire.
- Le but de ce formulaire est de permettre le calcul de l'impôt pour une
personne. Le taux de l'impôt est de 15% pour des revenus inférieurs à 15 000
euros et de 20% pour des revenus supérieurs à 15 000.
- une fois le formulaire envoyé grâce au bouton OK, une phrase s'affiche du
style « Mr Dupond votre impôt est de 600 euros ».
- Le programme doit obligatoirement contenir une classe impot dans un fichier
Impot.class.php avec un constructeur, une méthode `AfficheImpot()` qui retourne
une chaîne contenant le message à afficher (« Mr Dupond votre impôt est de 600
euros » par exemple) et une méthode `CalculImpôt()` qui retourne le montant de 
l'impôt suivant le revenu.
- Les taux de l'impôt (20% et 15%) devront être définis dans des constantes.

*Etape 1.*
---