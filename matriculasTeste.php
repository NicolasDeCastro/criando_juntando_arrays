<?php


$alunos = [
    'ana' ,
    'nicolas' ,
    'pedro',
    'carlos',
    
    ];

    $novosAlunos=[
        'marilda',
        'marcos',
        'carla',
    ];


/*  array_merge junta os arrays, porém tem algumas regras, caso os INDICADORES sejam numericos, 0,1,2,3..., ele rescreve o 2 array,neste exemplo acima o 2 array 
o quando transferido para o novo array, os indicadores seriam 5,6,7.
    caso o indicador seja STRING e seja igual, ele sobrescrevera o 1 com o 2 , logo o 'a' seria MARILDA. */ 
    $alunos2023 = array_merge($alunos,$novosAlunos);
    var_dump($alunos2023);

//neste caso ele que os indicadores com iguais, ele irá manter o 1 array .
  //  $alunosTeste = $alunos+$novosAlunos;
   // var_dump($alunosTeste);


//   um outro metodo de unir ou criar novos arrays a partir de outros, é os ""..."" , ele dividem o array valor por valor, a diferença dele para o merge é que ele vc consegue adicionar elementos de maneira individual,
//o merge une somente arrays.
// os """...""" podem ser usados em funções tambem, unindo valores .
    $alunosformula=[... $alunos, 'castro', ...$novosAlunos];
    var_dump($alunosformula);
