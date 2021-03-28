<?php

use App\Http\Controllers\Auth_admin\Home;
use App\Http\Controllers\Auth_admin\AuthenticatedSessionController;
use App\Http\Controllers\Auth_admin\ConfirmablePasswordController;
use App\Http\Controllers\Auth_admin\EmailVerificationNotificationController;
use App\Http\Controllers\Auth_admin\EmailVerificationPromptController;
use App\Http\Controllers\Auth_admin\NewPasswordController;
use App\Http\Controllers\Auth_admin\PasswordResetLinkController;
use App\Http\Controllers\Auth_admin\RegisteredUserController;
use App\Http\Controllers\Auth_admin\VerifyEmailController;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/admin_', function () {
   $this->user =  User::all();
    return view('admin_pages.index', ['user'=> $this->user[0]['first_name']]);
}) -> name('admin_index');
Route::get('/admin/index', function () {
    return view('admin_pages.index2');
})-> name('admin_index2'); 

Route::get('/admin/index1', function () {
    return view('admin_pages.index3');
})-> name('admin_index3');

Route::get('/admin/index2', function () {
    return view('admin_pages.index4');
})-> name('admin_index4'); 

Route::get('/admin/index3', function () {
    return view('admin_pages.index5');
})-> name('admin_index5'); 

Route::get('/admin/index4', function () {
    return view('admin_pages.index6');
})-> name('admin_index6'); 

Route::get('/admin/box_advanced', function (){
    return view('admin_pages.box_advanced');
})->name('box_advanced');

Route::get('/admin/box_basic', function (){
    return view('admin_pages.box_basic');
})->name('box_basic');

Route::get('/admin/box_cards', function (){
    return view('admin_pages.box_cards');
})->name('box_cards');

Route::get('/admin/box_color', function (){
    return view('admin_pages.box_color');
})->name('box_color');

Route::get('/admin/box_group', function (){
    return view('admin_pages.box_group');
})->name('box_group');

Route::get('/admin/charts_c3_axis', function (){
    return view('admin_pages.charts_c3_axis');
})->name('charts_c3_axis');

Route::get('/admin/charts_c3_bar', function (){
    return view('admin_pages.charts_c3_bar');
})->name('charts_c3_bar');

Route::get('/admin/charts_c3_data', function (){
    return view('admin_pages.charts_c3_data');
})->name('charts_c3_data');

Route::get('/admin/charts_c3_line', function (){
    return view('admin_pages.charts_c3_line');
})->name('charts_c3_line');

Route::get('/admin/charts_chartist', function (){
    return view('admin_pages.charts_chartist');
})->name('charts_chartist');

Route::get('/admin/charts_chartjs', function (){
    return view('admin_pages.charts_chartjs');
})->name('charts_chartjs');

Route::get('/admin/charts_echarts_bar', function (){
    return view('admin_pages.charts_echarts_bar');
})->name('charts_echarts_bar');

Route::get('/admin/charts_echarts_basic', function (){
    return view('admin_pages.charts_echarts_basic');
})->name('charts_echarts_basic');

Route::get('/admin/charts_echarts_pie_doughnut', function (){
    return view('admin_pages.charts_echarts_pie_doughnut');
})->name('charts_echarts_pie_doughnut');

Route::get('/admin/charts_flot', function (){
    return view('admin_pages.charts_flot');
})->name('charts_flot');

Route::get('/admin/charts_inline', function (){
    return view('admin_pages.charts_inline');
})->name('charts_inline');

Route::get('/admin/charts_morris', function (){
    return view('admin_pages.charts_morris');
})->name('charts_morris');

Route::get('/admin/charts_peity', function (){
    return view('admin_pages.charts_peity');
})->name('charts_peity');

Route::get('/admin/component_animations', function (){
    return view('admin_pages.component_animations');
})->name('component_animations');

Route::get('/admin/component_bootstrap_switch', function (){
    return view('admin_pages.component_bootstrap_switch');
})->name('component_bootstrap_switch');

Route::get('/admin/component_date_paginator', function (){
    return view('admin_pages.component_date_paginator');
})->name('component_date_paginator');

Route::get('/admin/component_media_advanced', function (){
    return view('admin_pages.component_media_advanced');
})->name('component_media_advanced');

Route::get('/admin/component_modals', function (){
    return view('admin_pages.component_modals');
})->name('component_modals');

Route::get('/admin/component_nestable', function (){
    return view('admin_pages.component_nestable');
})->name('component_nestable');

Route::get('/admin/component_notification', function (){
    return view('admin_pages.component_notification');
})->name('component_notification');

Route::get('/admin/component_portlet_draggable', function (){
    return view('admin_pages.component_portlet_draggable');
})->name('component_portlet_draggable');

Route::get('/admin/component_rangeslider', function (){
    return view('admin_pages.component_rangeslider');
})->name('component_rangeslider');

Route::get('/admin/component_rating', function (){
    return view('admin_pages.component_rating');
})->name('component_rating');

Route::get('/admin/component_sweatalert', function (){
    return view('admin_pages.component_sweatalert');
})->name('component_sweatalert');

Route::get('/admin/contact_app', function (){
    return view('admin_pages.contact_app');
})->name('contact_app');

Route::get('/admin/contact_app_chat', function (){
    return view('admin_pages.contact_app_chat');
})->name('contact_app_chat');

Route::get('/admin/contact_userlist', function (){
    return view('admin_pages.contact_userlist');
})->name('contact_userlist');

Route::get('/admin/contact_userlist_grid', function (){
    return view('admin_pages.contact_userlist_grid');
})->name('contact_userlist_grid');

Route::get('/admin/ecommerce_cart', function (){
    return view('admin_pages.ecommerce_cart');
})->name('ecommerce_cart');

Route::get('/admin/ecommerce_checkout', function (){
    return view('admin_pages.ecommerce_checkout');
})->name('ecommerce_checkout');

Route::get('/admin/ecommerce_details', function (){
    return view('admin_pages.ecommerce_details');
})->name('ecommerce_details');

Route::get('/admin/ecommerce_orders', function (){
    return view('admin_pages.ecommerce_orders');
})->name('ecommerce_orders');

Route::get('/admin/ecommerce_products', function (){
    return view('admin_pages.ecommerce_products');
})->name('ecommerce_products');

Route::get('/admin/ecommerce_products_edit', function (){
    return view('admin_pages.ecommerce_products_edit');
})->name('ecommerce_products_edit');

Route::get('/admin/email_change_pass', function (){
    return view('admin_pages.email_change_pass');
})->name('email_change_pass');

Route::get('/admin/email_closed_account', function (){
    return view('admin_pages.email_closed_account');
})->name('email_closed_account');

Route::get('/admin/email_expired_card', function (){
    return view('admin_pages.email_expired_card');
})->name('email_expired_card');

Route::get('/admin/email_index', function (){
    return view('admin_pages.email_index');
})->name('email_index');

Route::get('/admin/email_update', function (){
    return view('admin_pages.email_update');
})->name('email_update');

Route::get('/admin/email_verify_email', function (){
    return view('admin_pages.email_verify_email');
})->name('email_verify_email');

Route::get('/admin/email_welcome', function (){
    return view('admin_pages.email_welcome');
})->name('email_welcome');

Route::get('/admin/error_404', function (){
    return view('admin_pages.error_404');
})->name('error_404');

Route::get('/admin/error_500', function (){
    return view('admin_pages.error_500');
})->name('error_500');

Route::get('/admin/error_maintenance', function (){
    return view('admin_pages.error_maintenance');
})->name('error_maintenance');

Route::get('/admin/extension_fullscreen', function (){
    return view('admin_pages.extension_fullscreen');
})->name('extension_fullscreen');

Route::get('/admin/extension_pace', function (){
    return view('admin_pages.extension_pace');
})->name('extension_pace');

Route::get('/admin/extra_app_ticket', function (){
    return view('admin_pages.extra_app_ticket');
})->name('extra_app_ticket');

Route::get('/admin/extra_calendar', function (){
    return view('admin_pages.extra_calendar');
})->name('extra_calendar');

Route::get('/admin/extra_profile', function (){
    return view('admin_pages.extra_profile');
})->name('extra_profile');

Route::get('/admin/extra_taskboard', function (){
    return view('admin_pages.extra_taskboard');
})->name('extra_taskboard');

Route::get('/admin/forms_advanced', function (){
    return view('admin_pages.forms_advanced');
})->name('forms_advanced');

Route::get('/admin/forms_code_editor', function (){
    return view('admin_pages.forms_code_editor');
})->name('forms_code_editor');

Route::get('/admin/forms_dropzone', function (){
    return view('admin_pages.forms_dropzone');
})->name('forms_dropzone');

Route::get('/admin/forms_editor_markdown', function (){
    return view('admin_pages.forms_editor_markdown');
})->name('forms_editor_markdown');

Route::get('/admin/forms_editors', function (){
    return view('admin_pages.forms_editors');
})->name('forms_editors');

Route::get('/admin/forms_general', function (){
    return view('admin_pages.forms_general');
})->name('forms_general');

Route::get('/admin/forms_mask', function (){
    return view('admin_pages.forms_mask');
})->name('forms_mask');

Route::get('/admin/forms_validation', function (){
    return view('admin_pages.forms_validation');
})->name('forms_validation');

Route::get('/admin/forms_wizard', function (){
    return view('admin_pages.forms_wizard');
})->name('forms_wizard');

Route::get('/admin/forms_xeditable', function (){
    return view('admin_pages.forms_xeditable');
})->name('forms_xeditable');

Route::get('/admin/icons_flag', function (){
    return view('admin_pages.icons_flag');
})->name('icons_flag');

Route::get('/admin/icons_fontawesome', function (){
    return view('admin_pages.icons_fontawesome');
})->name('icons_fontawesome');

Route::get('/admin/icons_glyphicons', function (){
    return view('admin_pages.icons_glyphicons');
})->name('icons_glyphicons');

Route::get('/admin/icons_material', function (){
    return view('admin_pages.icons_material');
})->name('icons_material');

Route::get('/admin/icons_simpleline', function (){
    return view('admin_pages.icons_simpleline');
})->name('icons_simpleline');

Route::get('/admin/icons_themify', function (){
    return view('admin_pages.icons_themify');
})->name('icons_themify');

Route::get('/admin/icons_weather', function (){
    return view('admin_pages.icons_weather');
})->name('icons_weather');

Route::get('/admin/icons_cryptocoins', function (){
    return view('admin_pages.icons_cryptocoins');
})->name('icons_cryptocoins');

Route::get('/admin/invoice', function (){
    return view('admin_pages.invoice');
})->name('invoice');

Route::get('/admin/invoicelist', function (){
    return view('admin_pages.invoicelist');
})->name('invoicelist');

Route::get('/admin/mailbox', function (){
    return view('admin_pages.mailbox');
})->name('mailbox');

Route::get('/admin/map_google', function (){
    return view('admin_pages.map_google');
})->name('map_google');

Route::get('/admin/map_vector', function (){
    return view('admin_pages.map_vector');
})->name('map_vector');

Route::get('/admin/sample_blank', function (){
    return view('admin_pages.sample_blank');
})->name('sample_blank');

Route::get('/admin/sample_coming_soon', function (){
    return view('admin_pages.sample_coming_soon');
})->name('sample_coming_soon');

Route::get('/admin/sample_coming_soon_1', function (){
    return view('admin_pages.sample_coming_soon_1');
})->name('sample_coming_soon_1');

Route::get('/admin/sample_coming_soon_2', function (){
    return view('admin_pages.sample_coming_soon_2');
})->name('sample_coming_soon_2');

Route::get('/admin/sample_coming_soon_3', function (){
    return view('admin_pages.sample_coming_soon_3');
})->name('sample_coming_soon_3');

Route::get('/admin/sample_custom_scroll', function (){
    return view('admin_pages.sample_custom_scroll');
})->name('sample_custom_scroll');

Route::get('/admin/sample_faq', function (){
    return view('admin_pages.sample_faq');
})->name('sample_faq');

Route::get('/admin/sample_gallery', function (){
    return view('admin_pages.sample_gallery');
})->name('sample_gallery');

Route::get('/admin/sample_lightbox', function (){
    return view('admin_pages.sample_lightbox');
})->name('sample_lightbox');

Route::get('/admin/sample_pricing', function (){
    return view('admin_pages.sample_pricing');
})->name('sample_pricing');

Route::get('/admin/tables_color', function (){
    return view('admin_pages.tables_color');
})->name('tables_color');

Route::get('/admin/tables_data', function (){
    return view('admin_pages.tables_data');
})->name('tables_data');

Route::get('/admin/tables_editable', function (){
    return view('admin_pages.tables_editable');
})->name('tables_editable');

Route::get('/admin/tables_simple', function (){
    return view('admin_pages.tables_simple');
})->name('tables_simple');

Route::get('/admin/ui_badges', function (){
    return view('admin_pages.ui_badges');
})->name('ui_badges');

Route::get('/admin/ui_border_utilities', function (){
    return view('admin_pages.ui_border_utilities');
})->name('ui_border_utilities');

Route::get('/admin/ui_buttons', function (){
    return view('admin_pages.ui_buttons');
})->name('ui_buttons');

Route::get('/admin/ui_color_utilities', function (){
    return view('admin_pages.ui_color_utilities');
})->name('ui_color_utilities');

Route::get('/admin/ui_dropdown', function (){
    return view('admin_pages.ui_dropdown');
})->name('ui_dropdown');

Route::get('/admin/ui_dropdown_grid', function (){
    return view('admin_pages.ui_dropdown_grid');
})->name('ui_dropdown_grid');

Route::get('/admin/ui_grid', function (){
    return view('admin_pages.ui_grid');
})->name('ui_grid');

Route::get('/admin/ui_progress_bars', function (){
    return view('admin_pages.ui_progress_bars');
})->name('ui_progress_bars');

Route::get('/admin/ui_ribbons', function (){
    return view('admin_pages.ui_ribbons');
})->name('ui_ribbons');

Route::get('/admin/ui_sliders', function (){
    return view('admin_pages.ui_sliders');
})->name('ui_sliders');

Route::get('/admin/ui_tab', function (){
    return view('admin_pages.ui_tab');
})->name('ui_tab');

Route::get('/admin/ui_timeline', function (){
    return view('admin_pages.ui_timeline');
})->name('ui_timeline');

Route::get('/admin/ui_timeline_horizontal', function (){
    return view('admin_pages.ui_timeline_horizontal');
})->name('ui_timeline_horizontal');

Route::get('/admin/ui_typography', function (){
    return view('admin_pages.ui_typography');
})->name('ui_typography');

Route::get('/admin/widgets', function (){
    return view('admin_pages.widgets');
})->name('widgets');

Route::get('/admin/widgets_blog', function (){
    return view('admin_pages.widgets_blog');
})->name('widgets_blog');

Route::get('/admin/widgets_chart', function (){
    return view('admin_pages.widgets_chart');
})->name('widgets_chart');

Route::get('/admin/widgets_list', function (){
    return view('admin_pages.widgets_list');
})->name('widgets_list');

Route::get('/admin/widgets_social', function (){
    return view('admin_pages.widgets_social');
})->name('widgets_social');

Route::get('/admin/widgets_statistic', function (){
    return view('admin_pages.widgets_statistic');
})->name('widgets_statistic');

Route::get('/admin/widgets_weather', function (){
    return view('admin_pages.widgets_weather');
})->name('widgets_weather');

Route::get('admin',[AuthenticatedSessionController::class, 'create']);
Route::post('admin',[AuthenticatedSessionController::class, 'store']);




// template route (remove later.....)
/**
 * Route::get('/admin/temp', function () {
 *   return view('admin_master') ;
 *});
 */

Route::get('/admin/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('admin_register');

Route::post('/admin/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');
 