# Exercicios curso PHP
 Exercícios e anotações feitos localmente durante o curso de PHP da Danki Code.

---
## Error!
**File:** [Exercicios-curso-PHP\XML-JSON\JSON\ReadingJ.php](https://github.com/Jonatas-Soares-Alves/Exercicios-curso-PHP/blob/main/XML-JSON/JSON/ReadingJ.php)

**Lines:** 38 - 48;

**Problem:** Doesn't read the JSON in ['jsonRegistrado.php'](https://github.com/Jonatas-Soares-Alves/Exercicios-curso-PHP/blob/main/XML-JSON/JSON/jsonRegistrado.php)

### ReadingJ.php:
```javascript
$(function(){
    $.ajax({
        url:'jsonRegistrado.php',
        dataType:'json'
    }).done(function(data){
        console.log(data.nome);
        alert(data.nome);
    })
})
```

### jsonRegistrado.php:
```javascript
$infoArr = ['nome'=>'Joe', 'trabalho'=>'Cozinheiro'];

$infoJson = json_encode($infoArr); //Transforma um array em JSON e armazena.
```
---
