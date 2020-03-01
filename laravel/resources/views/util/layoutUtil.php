<?php

function getMenuLinks(){
    return [//todos os possiveis links do menu, utilizado no layout da area administrativa
        'ACadastro'=>['link'=>route('cadastro.show') , 'texto'=>'Adicionar cadastro de cliente' ],
        'ECadastro'=>['link'=>route('cadastrosVinculados.show') , 'texto'=>'Visualizar, editar ou excluir cadastro de cliente' ]
    ];
}
