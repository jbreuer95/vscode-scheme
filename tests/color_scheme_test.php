<?php // COLOR SCHEME TEST "vscode-scheme/vscode.tmTheme" "PHP"

require_once($GLOBALS['g_campsiteDir']. "/$ADMIN_DIR/country/common.php");
// ^^^^^^^^^ fg=#dcdcaa fs=
//          ^ fg=#d4d4d4 fs=
//           ^^^^^^^^ fg=#9cdcfe fs=
//                   ^ fg=#d4d4d4 fs=
//                    ^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                   ^^ fg=#d4d4d4 fs=
//                                      ^^ fg=#ce9178 fs=
//                                        ^^^^^^^^^^ fg=#9cdcfe fs=
//                                                  ^^^^^^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                                                      ^^ fg=#d4d4d4 fs=
require_once($GLOBALS['g_campsiteDir']. "/classes/SimplePager.php");
// ^^^^^^^^^ fg=#dcdcaa fs=
//          ^ fg=#d4d4d4 fs=
//           ^^^^^^^^ fg=#9cdcfe fs=
//                   ^ fg=#d4d4d4 fs=
//                    ^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                   ^^ fg=#d4d4d4 fs=
//                                      ^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                                                ^^ fg=#d4d4d4 fs=
camp_load_translation_strings("api");
// ^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#dcdcaa fs=
//                           ^ fg=#d4d4d4 fs=
//                            ^^^^^ fg=#ce9178 fs=
//                                 ^^ fg=#d4d4d4 fs=

$f_country_language_selected = camp_session_get('f_language_selected', '');
// ^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                           ^ fg=#d4d4d4 fs=
//                             ^^^^^^^^^^^^^^^^ fg=#dcdcaa fs=
//                                             ^ fg=#d4d4d4 fs=
//                                              ^^^^^^^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                                                   ^ fg=#d4d4d4 fs=
//                                                                     ^^ fg=#ce9178 fs=
//                                                                       ^^ fg=#d4d4d4 fs=
$f_country_offset = camp_session_get('f_country_offset', 0);
// ^^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                ^ fg=#d4d4d4 fs=
//                  ^^^^^^^^^^^^^^^^ fg=#dcdcaa fs=
//                                  ^ fg=#d4d4d4 fs=
//                                   ^^^^^^^^^^^^^^^^^^ fg=#ce9178 fs=
//                                                     ^ fg=#d4d4d4 fs=
//                                                       ^ fg=#b5cea8 fs=
//                                                        ^^ fg=#d4d4d4 fs=
if (empty($f_country_language_selected)) {
// ^ fg=#d4d4d4 fs=
//  ^^^^^ fg=#dcdcaa fs=
//       ^ fg=#d4d4d4 fs=
//        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                                    ^^ fg=#d4d4d4 fs=
//                                       ^ fg=#d4d4d4 fs=
    $f_country_language_selected = null;
//  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                               ^ fg=#d4d4d4 fs=
//                                 ^^^^ fg=#569cd6 fs=
//                                     ^ fg=#d4d4d4 fs=
}
$ItemsPerPage = 20;
// ^^^^^^^^^^ fg=#9cdcfe fs=
//            ^ fg=#d4d4d4 fs=
//              ^^ fg=#b5cea8 fs=
//                ^ fg=#d4d4d4 fs=
$languages = Language::GetLanguages(null, null, null, array(), array(), true);
// ^^^^^^^ fg=#9cdcfe fs=
//         ^ fg=#d4d4d4 fs=
//           ^^^^^^^^ fg=#4EC9B0 fs=
//                   ^^ fg=#d4d4d4 fs=
//                     ^^^^^^^^^^^^ fg=#dcdcaa fs=
//                                 ^ fg=#d4d4d4 fs=
//                                  ^^^^ fg=#569cd6 fs=
//                                      ^ fg=#d4d4d4 fs=
//                                        ^^^^ fg=#569cd6 fs=
//                                            ^ fg=#d4d4d4 fs=
//                                              ^^^^ fg=#569cd6 fs=
//                                                  ^ fg=#d4d4d4 fs=
//                                                    ^^^^^ fg=#dcdcaa fs=
//                                                         ^^^ fg=#d4d4d4 fs=
//                                                             ^^^^^ fg=#dcdcaa fs=
//                                                                  ^^^ fg=#d4d4d4 fs=
//                                                                      ^^^^ fg=#569cd6 fs=
//                                                                          ^^ fg=#d4d4d4 fs=
$numCountries = Country::GetNumCountries($f_country_language_selected);
// ^^^^^^^^^^ fg=#9cdcfe fs=
//            ^ fg=#d4d4d4 fs=
//              ^^^^^^^ fg=#4EC9B0 fs=
//                     ^^ fg=#d4d4d4 fs=
//                       ^^^^^^^^^^^^^^^ fg=#dcdcaa fs=
//                                      ^ fg=#d4d4d4 fs=
//                                       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                                                                   ^^ fg=#d4d4d4 fs=

$pager = new SimplePager($numCountries, $ItemsPerPage, "index.php?");
// ^^^ fg=#9cdcfe fs=
//     ^ fg=#d4d4d4 fs=
//       ^^^ fg=#569cd6 fs=
//           ^^^^^^^^^^^ fg=#4EC9B0 fs=
//                      ^ fg=#d4d4d4 fs=
//                       ^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                                    ^ fg=#d4d4d4 fs=
//                                      ^^^^^^^^^^^^^ fg=#9cdcfe fs=
//                                                   ^ fg=#d4d4d4 fs=
//                                                     ^^^^^^^^^^^^ fg=#ce9178 fs=
//                                                                 ^^ fg=#d4d4d4 fs=

$crumbs = array();
// ^^^^ fg=#9cdcfe fs=
//      ^ fg=#d4d4d4 fs=
//        ^^^^^ fg=#dcdcaa fs=
//             ^^^ fg=#d4d4d4 fs=
$crumbs[] = array(getGS("Configure"), "");
// ^^^^ fg=#9cdcfe fs=
//     ^^ fg=#d4d4d4 fs=
//        ^ fg=#d4d4d4 fs=
//          ^^^^^ fg=#dcdcaa fs=
//               ^ fg=#d4d4d4 fs=
//                ^^^^^ fg=#dcdcaa fs=
//                     ^ fg=#d4d4d4 fs=
//                      ^^^^^^^^^^^ fg=#ce9178 fs=
//                                 ^^ fg=#d4d4d4 fs=
//                                    ^^ fg=#ce9178 fs=
//                                      ^^ fg=#d4d4d4 fs=
$crumbs[] = array(getGS("Countries"), "");
// ^^^^ fg=#9cdcfe fs=
//     ^^ fg=#d4d4d4 fs=
//        ^ fg=#d4d4d4 fs=
//          ^^^^^ fg=#dcdcaa fs=
//               ^ fg=#d4d4d4 fs=
//                ^^^^^ fg=#dcdcaa fs=
//                     ^ fg=#d4d4d4 fs=
//                      ^^^^^^^^^^^ fg=#ce9178 fs=
//                                 ^^ fg=#d4d4d4 fs=
//                                    ^^ fg=#ce9178 fs=
//                                      ^^ fg=#d4d4d4 fs=
echo camp_html_breadcrumbs($crumbs);
// ^ fg=#dcdcaa fs=
//   ^^^^^^^^^^^^^^^^^^^^^ fg=#dcdcaa fs=
//                        ^ fg=#d4d4d4 fs=
//                         ^^^^^^^ fg=#9cdcfe fs=
//                                ^^ fg=#d4d4d4 fs=

    ?>
<!-- ^ fg=#569cd6 fs= -->

<?php  if ($g_user->hasPermission("ManageCountries")) { ?>
<!--   ^^ fg=#C586C0 fs= -->
<!--      ^ fg=#d4d4d4 fs= -->
<!--       ^^^^^^^ fg=#9cdcfe fs= -->
<!--              ^^ fg=#d4d4d4 fs= -->
<!--                ^^^^^^^^^^^^^ fg=#dcdcaa fs= -->
<!--                             ^ fg=#d4d4d4 fs= -->
<!--                              ^^^^^^^^^^^^^^^^^ fg=#ce9178 fs= -->
<!--                                               ^^ fg=#d4d4d4 fs= -->
<!--                                                  ^ fg=#d4d4d4 fs= -->
<!--                                                    ^^ fg=#569cd6 fs= -->
<table BORDER="0" CELLSPACING="0" CELLPADDING="1">
<!-- ^ fg=#569cd6 fs= -->
<!--   ^^^^^^ fg=#9cdcfe fs= -->
<!--         ^ fg=#d4d4d4 fs= -->
<!--          ^^^ fg=#ce9178 fs= -->
<!--              ^^^^^^^^^^^ fg=#9cdcfe fs= -->
<!--                         ^ fg=#d4d4d4 fs= -->
<!--                          ^^^ fg=#ce9178 fs= -->
<!--                              ^^^^^^^^^^^ fg=#9cdcfe fs= -->
<!--                                         ^ fg=#d4d4d4 fs= -->
<!--                                          ^^^ fg=#ce9178 fs= -->
<!--                                             ^ fg=#d4d4d4 fs= -->
    <tr>
<!-- ^^ fg=#569cd6 fs= -->
<!--   ^ fg=#d4d4d4 fs= -->
        <td><a href="add.php"><?php putGS("Add new"); ?></a></td>
<!--    ^ fg=#d4d4d4 fs= -->
<!--     ^^ fg=#569cd6 fs= -->
<!--       ^^ fg=#d4d4d4 fs= -->
<!--         ^ fg=#569cd6 fs= -->
<!--           ^^^^ fg=#9cdcfe fs= -->
<!--               ^ fg=#d4d4d4 fs= -->
<!--                ^^^^^^^^^ fg=#ce9178 fs= -->
<!--                         ^ fg=#d4d4d4 fs= -->
<!--                          ^^^^^ fg=#569cd6 fs= -->
<!--                                ^^^^^ fg=#dcdcaa fs= -->
<!--                                     ^ fg=#d4d4d4 fs= -->
<!--                                      ^^^^ fg=#ce9178 fs= -->
<!--                                           ^^^^ fg=#ce9178 fs= -->
<!--                                               ^^ fg=#d4d4d4 fs= -->
<!--                                                  ^^ fg=#569cd6 fs= -->
<!--                                                    ^^ fg=#d4d4d4 fs= -->
<!--                                                      ^ fg=#569cd6 fs= -->
<!--                                                       ^^^ fg=#d4d4d4 fs= -->
<!--                                                          ^^ fg=#569cd6 fs= -->
<!--                                                            ^ fg=#d4d4d4 fs= -->
    </tr>
<!-- ^ fg=#d4d4d4 fs= -->
<!--  ^^ fg=#569cd6 fs= -->
<!--    ^ fg=#d4d4d4 fs= -->
</table>
<!-- ^^ fg=#569cd6 fs= -->
<!--   ^ fg=#d4d4d4 fs= -->
