<?php

function getMenuLinks(){
    return [//todos os possiveis links do menu, utilizado no layout da area administrativa
        'inicio'=>   ['link'=>route("inicio") , 'texto'=>'Inicio' ],// texto é o nome que vai estar dentro da tag <a>
        'ACadastro'=>['link'=>route('cadastro.show') , 'texto'=>'Adicionar cadastro de cliente' ],
        'ECadastro'=>['link'=>route('editarCadastro.show') , 'texto'=>'Editar ou excluir cadastro de cliente' ]
    ];
}