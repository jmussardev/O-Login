# Hash et password

## Encoder une chaine (sans hash)
### Encoder une chaine ?
- on part d'une chaine en claire : 'meuh!'
- on  encode/crypte
- on obtien : 'sdfo329'

### Décoder une chaine ?
- on part de la chaine encodée :'sdfo329'
- on décode
- on obtient la chaine initiale : 'meuh!'

## Le hash fonctionne différemment :
- on part d'une chaine en claire : 'meuh!'
- on  encode/crypte
- on obtient : '$2y$10$Xw01XmiMYd6KVnM1PxcEkOHIA5W1nmWcRvueLLl2rxL7r5T9Glcwu'
=> la particularité du hash, c'est qu'on ne peut pas revenir en arrière, on ne peut pas retrouver la chaine initiale !