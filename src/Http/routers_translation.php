<?php

Route::get('/js/translate_phrases_{lang}.js', 'Admin\Builder\Http\Controllers\TranslateController@getJs')->name('translate_js');
Route::group(['middleware' => ['web']], function () {
    Route::group(
        ['prefix' => 'admin', 'middleware' => 'auth.admin'],
        function () {
            Route::any('translations/phrases', [
                    'as'   => 'phrases_all',
                    'uses' => 'Admin\Builder\Http\Controllers\TranslateController@index', ]
            );

            if (Request::ajax()) {
                Route::post('translations/create_pop', [
                        'as'   => 'create_pop',
                        'uses' => 'Admin\Builder\Http\Controllers\TranslateController@shopPopupForCreate', ]
                );

                Route::post('translations/add_record', [
                        'as'   => 'add_record',
                        'uses' => 'Admin\Builder\Http\Controllers\TranslateController@saveTranslate', ]
                );
                Route::post('translations/change_text_lang', [
                        'as'   => 'change_text_lang',
                        'uses' => 'Admin\Builder\Http\Controllers\TranslateController@savePhrase', ]
                );
                Route::post('translations/del_record', [
                        'as'   => 'del_record',
                        'uses' => 'Admin\Builder\Http\Controllers\TranslateController@remove', ]
                );
                Route::post('translations/create_js_file', [
                        'as'   => 'create_js_file',
                        'uses' => 'Admin\Builder\Http\Controllers\TranslateController@createdJsFile', ]
                );
            }
        });
});

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => 'web'],
    function () {
        Route::post('auto_translate', 'Admin\Builder\Http\Controllers\TranslateController@doTranslatePhraseInJs')
            ->name('auto_translate');
    });
