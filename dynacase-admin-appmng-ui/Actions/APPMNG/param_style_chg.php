<?php
/*
 * @author Anakeen
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @package FDL
*/
/**
 * Generated Header (not documented yet)
 *
 * @author Anakeen
 * @version $Id: param_style_chg.php,v 1.2 2003/08/18 15:46:41 eric Exp $
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @package FDL
 * @subpackage APPMNG
 */
/**
 */
// ---------------------------------------------------------------
// $Id: param_style_chg.php,v 1.2 2003/08/18 15:46:41 eric Exp $
// $Source: /home/cvsroot/anakeen/freedom/core/Action/Appmng/param_style_chg.php,v $
// ---------------------------------------------------------------
// $Log: param_style_chg.php,v $
// Revision 1.2  2003/08/18 15:46:41  eric
// phpdoc
//
// Revision 1.1  2002/01/08 12:41:33  eric
// first
//
// Revision 1.1  2001/01/29 15:50:59  marianne
// prise en compte de la gestion des parametres
//
//
// ---------------------------------------------------------------
include_once ("Class.QueryDb.php");
include_once ("Class.Acl.php");
include_once ("Class.Permission.php");
// -----------------------------------
function param_style_chg(&$action)
{
    // -----------------------------------
    // select the first user if not set
    // What style are we working on ? ask session.
    $style_id = GetHttpVars("id");
    $action->log->debug("style_id : " . $style_id);
    $action->Register("param_style_id", $style_id);
    
    redirect($action, "APPMNG", "STYLELIST");
}
?>
