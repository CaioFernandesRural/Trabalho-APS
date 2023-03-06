<?php
session_start();
#requireValidSession();

loadTemplateView('cadastro_artigo');

//Ao clicar no botão Enviar e o Post for bem sucedido, levar a home com o artigo exibido na home
//Ao clicar em cancelar, voltar para a home
