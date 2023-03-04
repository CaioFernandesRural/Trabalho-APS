<?php
session_start();
requireValidSession(); //se o cara não tiver logado não pode acessar//deixar desabilitado até terem logins no banco

loadTemplateView('home');