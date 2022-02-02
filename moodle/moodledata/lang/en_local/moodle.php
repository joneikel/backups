<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://unerg.alcaravan.com.ve
 *
 * @package    core
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['newusernewpasswordtext'] = '<h2> Bienvenido(a), {$a->firstname}.</h2>
<h3>La Dirección General de Servicio Comunitario informa: Desde el día 6/12/2021 hasta el 10/12/2021 se les asignará una serie de ejercicios, en aras de fortalecer y diversificar sus potencialidades en cuanto a la realización del servicio comunitario UNERG 2021 - 2022. 
Para ello se te ha abierto una nueva cuenta en \'{$a->sitename}\'
y se le ha asignado una nueva contraseña temporal.</h3>
<h3>La información para entrar es:
nombre de usuario: <strong>{$a->username}</strong>
contraseña: <strong>{$a->newpassword}</strong>
(deberá cambiar su contraseña cuando acceda por primera vez) </h3>
<h3>Para comenzar a usar \'{$a->sitename}\', entre en 
{$a->link}<h3>
<p>En la mayoría de programas de correo electrónico, debería aparecer en forma de enlace azul sobre el que simplemente puede hacer clic. Si eso no funciona, copie y pegue la dirección en la barra de direcciones del navegador.</p>
<h3>Un saludo del administrador de \'{$a->sitename}\',
{$a->signoff}<h3>';
