<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register' => false]);

Route::get('', 'UserPostController@index')->name('home');
Route::prefix('tentang-kami')->name('tentang-kami.')->group(function() {
    Route::get('visi-misi', 'UserPostController@visidanmisi')->name('visi-misi');
    Route::get('pemahaman-iman', 'UserPostController@pemahaman_iman')->name('pemahaman-iman');
    Route::get('sejarah-gereja', 'UserPostController@sejarah_gereja')->name('sejarah-gereja');
    Route::get('galeri', 'UserPostController@galeri')->name('galeri');
    Route::get('ebuletin', 'UserPostController@ebuletin')->name('ebuletin');
});
Route::prefix('direktori')->name('direktori.')->group(function() {
    Route::get('phmj', 'UserPostController@phmj')->name('phmj');
    Route::get('pendeta-jemaat', 'UserPostController@pendeta_jemaat')->name('pendeta-jemaat');
    Route::get('majelis-jemaat', 'UserPostController@majelis_jemaat')->name('majelis-jemaat');
    Route::get('koordinator-sektor', 'UserPostController@koordinator_sektor')->name('koordinator-sektor');
    Route::prefix('pelayanan-kategorial')->name('pelayanan-kategorial.')->group(function() {
        Route::get('pa', 'UserPostController@pelayanan_anak')->name('pa');
        Route::get('pt', 'UserPostController@persekutuan_teruna')->name('pt');
        Route::get('gp', 'UserPostController@gerakan_pemuda')->name('gp');
        Route::get('pkp', 'UserPostController@persekutuan_kaum_perempuan')->name('pkp');
        Route::get('pkb', 'UserPostController@persekutuan_kaum_bapak')->name('pkb');
        Route::get('pklu', 'UserPostController@persekutuan_kaum_lanjut_usia')->name('pklu');
    });
    Route::prefix('komisi')->name('komisi.')->group(function() {
        Route::get('teologi', 'UserPostController@teologi')->name('teologi');
        //Route::get('musik-gerejawi', 'UserPostController@musik_gerejawi')->name('musik-gerejawi');
        Route::get('pelayanan-kesaksian', 'UserPostController@pelayanan_kesaksian')->name('pelayanan-kesaksian');
        //Route::get('diakoni', 'UserPostController@diakoni')->name('diakoni');
        Route::get('kalvari', 'UserPostController@kalvari')->name('kalvari');
        Route::get('germasa', 'UserPostController@germasa')->name('germasa');
        Route::get('ppsdi', 'UserPostController@ppsdi')->name('ppsdi');
        Route::get('peg', 'UserPostController@peg')->name('peg');
        Route::get('rumah-tangga', 'UserPostController@rumah_tangga')->name('rumah-tangga');
        Route::get('inforkom-litbang', 'UserPostController@inforkom_litbang')->name('inforkom-litbang');
    });
});
Route::get('tata-ibadah', 'UserPostController@tata_ibadah')->name('tata-ibadah');
Route::get('warta-jemaat', 'UserPostController@warta_jemaat')->name('warta-jemaat');
Route::prefix('formulir')->name('formulir.')->group(function() {
    Route::get('atestasi', 'UserFormulirController@atestasi')->name('atestasi');
    Route::get('baptisan', 'UserFormulirController@baptisan')->name('baptisan');
    Route::get('sidi', 'UserFormulirController@sidi')->name('sidi');
    Route::get('pernikahan', 'UserFormulirController@pernikahan')->name('pernikahan');
});
Route::get('hubungi-kami', 'UserPostController@hubungi_kami')->name('hubungi-kami');
Route::get('reservasi_kursi', function () {
    return response()->view('errors.403', [], 403);
})->name('reservasi-kursi');
Route::post('edit','AdminPostController@update')->name('update');
// Route::get('/home', 'HomeController@index');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    /* Dashboard Section */
    Route::get('/','AdminController@dashboard');
    Route::get('dashboard','AdminController@dashboard')->name('dashboard');
    Route::prefix('ebuletin')->name('ebuletin.')->group(function() {
        /* Dashboard Section */
        Route::get('create','AdminEbuletinController@showCreateForm')->name('showCreateForm');
        Route::post('create','AdminEbuletinController@create')->name('create');
        Route::get('edit/{id}','AdminEbuletinController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminEbuletinController@update')->name('update');
        Route::get('list','AdminEbuletinController@list')->name('list');
        Route::post('delete','AdminEbuletinController@delete')->name('delete');
    });
    Route::prefix('galeri')->name('galeri.')->group(function() {
        /* Dashboard Section */
        Route::get('create','AdminGaleriController@showCreateForm')->name('showCreateForm');
        Route::post('create','AdminGaleriController@create')->name('create');
        Route::get('edit/{id}','AdminGaleriController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminGaleriController@update')->name('update');
        Route::get('list','AdminGaleriController@list')->name('list');
        Route::post('delete','AdminGaleriController@delete')->name('delete');
    });
    Route::prefix('berita')->name('berita.')->group(function() {
        /* Dashboard Section */
        Route::get('create','AdminBeritaController@showCreateForm')->name('showCreateForm');
        Route::post('create','AdminBeritaController@create')->name('create');
        Route::get('edit/{id}','AdminBeritaController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminBeritaController@update')->name('update');
        Route::get('list','AdminController@berita')->name('list');
        Route::post('delete','AdminBeritaController@delete')->name('delete');
    });
    Route::prefix('halaman')->name('halaman.')->group(function() {
        /* Dashboard Section */
        Route::get('edit/{id}','AdminPostController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminPostController@update')->name('update');
        Route::get('list','AdminPostController@list')->name('list');
    });
    Route::prefix('formulir')->name('formulir.')->group(function() {
        /* Dashboard Section */
        Route::get('edit/{id}','AdminFormulirController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminFormulirController@update')->name('update');
        Route::get('list','AdminFormulirController@list')->name('list');
    });
    Route::prefix('warta-jemaat')->name('warta-jemaat.')->group(function() {
        /* Dashboard Section */
        Route::get('create','AdminWartaJemaatController@showCreateForm')->name('showCreateForm');
        Route::post('create','AdminWartaJemaatController@create')->name('create');
        Route::get('edit/{id}','AdminWartaJemaatController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminWartaJemaatController@update')->name('update');
        Route::get('list','AdminWartaJemaatController@list')->name('list');
        Route::post('delete','AdminWartaJemaatController@delete')->name('delete');
    });
    Route::prefix('tata-ibadah')->name('tata-ibadah.')->group(function() {
        /* Dashboard Section */
        Route::get('create','AdminTataIbadahController@showCreateForm')->name('showCreateForm');
        Route::post('create','AdminTataIbadahController@create')->name('create');
        Route::get('edit/{id}','AdminTataIbadahController@showEditForm')->name('showEditForm');
        Route::post('edit','AdminTataIbadahController@update')->name('update');
        Route::get('list','AdminTataIbadahController@list')->name('list');
        Route::post('delete','AdminTataIbadahController@delete')->name('delete');
    });
    Route::namespace('Direktori')->prefix('direktori')->name('direktori.')->group(function() {
        Route::prefix('phmj')->name('phmj.')->group(function() {
            /* Dashboard Section */
            Route::get('create','AdminPHMJController@showCreateForm')->name('showCreateForm');
            Route::post('create','AdminPHMJController@create')->name('create');
            Route::get('edit/{id}','AdminPHMJController@showEditForm')->name('showEditForm');
            Route::post('edit','AdminPHMJController@update')->name('update');
            Route::get('list','AdminPHMJController@list')->name('list');
            Route::post('delete','AdminPHMJController@delete')->name('delete');
        });
        Route::prefix('pendeta')->name('pendeta.')->group(function() {
            /* Dashboard Section */
            Route::get('create','AdminPendetaController@showCreateForm')->name('showCreateForm');
            Route::post('create','AdminPendetaController@create')->name('create');
            Route::get('edit/{id}','AdminPendetaController@showEditForm')->name('showEditForm');
            Route::post('edit','AdminPendetaController@update')->name('update');
            Route::get('list','AdminPendetaController@list')->name('list');
            Route::post('delete','AdminPendetaController@delete')->name('delete');
        });
        Route::prefix('majelis-jemaat')->name('majelis-jemaat.')->group(function() {
            /* Dashboard Section */
            Route::get('create','AdminMajelisJemaatController@showCreateForm')->name('showCreateForm');
            Route::post('create','AdminMajelisJemaatController@create')->name('create');
            Route::get('edit/{id}','AdminMajelisJemaatController@showEditForm')->name('showEditForm');
            Route::post('edit','AdminMajelisJemaatController@update')->name('update');
            Route::get('list','AdminMajelisJemaatController@list')->name('list');
            Route::post('delete','AdminMajelisJemaatController@delete')->name('delete');
        });
        Route::prefix('koordinator-sektor')->name('koordinator-sektor.')->group(function() {
            /* Dashboard Section */
            Route::get('create','AdminKoorsekController@showCreateForm')->name('showCreateForm');
            Route::post('create','AdminKoorsekController@create')->name('create');
            Route::get('edit/{id}','AdminKoorsekController@showEditForm')->name('showEditForm');
            Route::post('edit','AdminKoorsekController@update')->name('update');
            Route::get('list','AdminKoorsekController@list')->name('list');
            Route::post('delete','AdminKoorsekController@delete')->name('delete');
        });
        Route::namespace('Pelayanan_Kategorial')->prefix('pelayanan-kategorial')->name('pelayanan-kategorial.')->group(function() {
            Route::get('edit/{id}','AdminPelkatController@showEditForm')->name('showEditForm');
            Route::post('edit','AdminPelkatController@update')->name('update');
            Route::prefix('pa')->name('pa.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPAController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPAController@create')->name('create');
                Route::get('edit/{id}','AdminPAController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPAController@update')->name('update');
                Route::get('list','AdminPAController@list')->name('list');
                Route::post('delete','AdminPAController@delete')->name('delete');
            });
            Route::prefix('pt')->name('pt.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPTController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPTController@create')->name('create');
                Route::get('edit/{id}','AdminPTController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPTController@update')->name('update');
                Route::get('list','AdminPTController@list')->name('list');
                Route::post('delete','AdminPTController@delete')->name('delete');
            });
            Route::prefix('pkp')->name('pkp.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPKPController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPKPController@create')->name('create');
                Route::get('edit/{id}','AdminPKPController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPKPController@update')->name('update');
                Route::get('list','AdminPKPController@list')->name('list');
                Route::post('delete','AdminPKPController@delete')->name('delete');
            });
            Route::prefix('pkb')->name('pkb.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPKBController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPKBController@create')->name('create');
                Route::get('edit/{id}','AdminPKBController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPKBController@update')->name('update');
                Route::get('list','AdminPKBController@list')->name('list');
                Route::post('delete','AdminPKBController@delete')->name('delete');
            });
            Route::prefix('gp')->name('gp.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminGPController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminGPController@create')->name('create');
                Route::get('edit/{id}','AdminGPController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminGPController@update')->name('update');
                Route::get('list','AdminGPController@list')->name('list');
                Route::post('delete','AdminGPController@delete')->name('delete');
            });
            Route::prefix('pklu')->name('pklu.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPKLUController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPKLUController@create')->name('create');
                Route::get('edit/{id}','AdminPKLUController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPKLUController@update')->name('update');
                Route::get('list','AdminPKLUController@list')->name('list');
                Route::post('delete','AdminPKLUController@delete')->name('delete');
            });
        });
        Route::namespace('Komisi')->prefix('komisi')->name('komisi.')->group(function() {
            Route::prefix('teologi')->name('teologi.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminTeologiController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminTeologiController@create')->name('create');
                Route::get('edit/{id}','AdminTeologiController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminTeologiController@update')->name('update');
                Route::get('list','AdminTeologiController@list')->name('list');
                Route::post('delete','AdminTeologiController@delete')->name('delete');
            });
            // Route::prefix('musik-gerejawi')->name('musik-gerejawi.')->group(function() {
            //     /* Dashboard Section */
            //     Route::get('create','AdminMusikController@showCreateForm')->name('showCreateForm');
            //     Route::post('create','AdminMusikController@create')->name('create');
            //     Route::get('edit/{id}','AdminMusikController@showEditForm')->name('showEditForm');
            //     Route::post('edit','AdminMusikController@update')->name('update');
            //     Route::get('list','AdminMusikController@list')->name('list');
            //     Route::post('delete','AdminMusikController@delete')->name('delete');
            // });
            Route::prefix('pelayanan-kesaksian')->name('pelayanan-kesaksian.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPekesController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPekesController@create')->name('create');
                Route::get('edit/{id}','AdminPekesController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPekesController@update')->name('update');
                Route::get('list','AdminPekesController@list')->name('list');
                Route::post('delete','AdminPekesController@delete')->name('delete');
            });
            // Route::prefix('diakoni')->name('diakoni.')->group(function() {
            //     /* Dashboard Section */
            //     Route::get('create','AdminDiakoniController@showCreateForm')->name('showCreateForm');
            //     Route::post('create','AdminDiakoniController@create')->name('create');
            //     Route::get('edit/{id}','AdminDiakoniController@showEditForm')->name('showEditForm');
            //     Route::post('edit','AdminDiakoniController@update')->name('update');
            //     Route::get('list','AdminDiakoniController@list')->name('list');
            //     Route::post('delete','AdminDiakoniController@delete')->name('delete');
            // });
            Route::prefix('kalvari')->name('kalvari.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminKalvariController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminKalvariController@create')->name('create');
                Route::get('edit/{id}','AdminKalvariController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminKalvariController@update')->name('update');
                Route::get('list','AdminKalvariController@list')->name('list');
                Route::post('delete','AdminKalvariController@delete')->name('delete');
            });
            Route::prefix('germasa')->name('germasa.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminGermasaController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminGermasaController@create')->name('create');
                Route::get('edit/{id}','AdminGermasaController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminGermasaController@update')->name('update');
                Route::get('list','AdminGermasaController@list')->name('list');
                Route::post('delete','AdminGermasaController@delete')->name('delete');
            });
            Route::prefix('ppsdi')->name('ppsdi.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPPSDIController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPPSDIController@create')->name('create');
                Route::get('edit/{id}','AdminPPSDIController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPPSDIController@update')->name('update');
                Route::get('list','AdminPPSDIController@list')->name('list');
                Route::post('delete','AdminPPSDIController@delete')->name('delete');
            });
            Route::prefix('peg')->name('peg.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminPEGController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminPEGController@create')->name('create');
                Route::get('edit/{id}','AdminPEGController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminPEGController@update')->name('update');
                Route::get('list','AdminPEGController@list')->name('list');
                Route::post('delete','AdminPEGController@delete')->name('delete');
            });
            Route::prefix('rumah-tangga')->name('rumah-tangga.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminRTController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminRTController@create')->name('create');
                Route::get('edit/{id}','AdminRTController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminRTController@update')->name('update');
                Route::get('list','AdminRTController@list')->name('list');
                Route::post('delete','AdminRTController@delete')->name('delete');
            });
            Route::prefix('inforkom-litbang')->name('inforkom-litbang.')->group(function() {
                /* Dashboard Section */
                Route::get('create','AdminLitbangController@showCreateForm')->name('showCreateForm');
                Route::post('create','AdminLitbangController@create')->name('create');
                Route::get('edit/{id}','AdminLitbangController@showEditForm')->name('showEditForm');
                Route::post('edit','AdminLitbangController@update')->name('update');
                Route::get('list','AdminLitbangController@list')->name('list');
                Route::post('delete','AdminLitbangController@delete')->name('delete');
            });
        });
    });
});

// Route::namespace('Formulir')->prefix('formulir')->name('formulir.')->group(function() {
//     /* Dashboard Section */
//     Route::get('atestasi','AdminFormulirController@atestasi')->name('atestasi');
//     Route::get('baptisan-test','AdminFormulirController@baptisan')->name('baptisan-test');
// });

Route::get('logout','Auth\LoginController@logout')->name('logout');