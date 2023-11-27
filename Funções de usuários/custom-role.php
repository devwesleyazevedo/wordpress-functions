<?php

// Commit 1: Adiciona uma função para atribuir uma nova role (funções/permisssões de usuários) no WordPress através do functions.php

function add_comercial_role() {
        add_role(
            'comercial', // Commit 3: Define o nome da role como 'comercial'
            'Comercial',  // Commit 4: Define o rótulo da role como 'Comercial'
            array(
                'read' => true,                // Permissão de leitura
                'edit_posts' => true,          // Permissão de edição de posts
                'delete_posts' => true,        // Permissão de exclusão de posts
                'publish_posts' => true,       // Permissão de publicação de posts
                'upload_files' => true,        // Permissão de upload de arquivos
                'edit_published_posts' => true, // Permissão de editar posts publicados
                'edit_others_posts' => true,    // Permissão de editar posts de outros usuários
                'delete_others_posts' => true,  // Permissão de excluir posts de outros usuários
                // Adicione outras permissões conforme necessário
            )
        );
    }