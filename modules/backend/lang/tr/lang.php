<?php

return [
    'field' => [
        'invalid_type' => 'Invalid field type used :type.',
        'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the ":field" form field.',
    ],
    'widget' => [
        'not_registered' => "A widget class name ':name' has not been registered",
        'not_bound' => "A widget with class name ':name' has not been bound to the controller",
    ],
    'page' => [
        'untitled' => "Başlıksız",
    ],
    'partial' => [
        'not_found' => "':name' bölümü bulunamadı.",
    ],
    'account' => [
        'sign_out' => 'Çıkış',
        'login' => 'Giriş',
        'reset' => 'Sıfırla',
        'restore' => 'Geri yükle',
        'login_placeholder' => 'kullanıcı adı',
        'password_placeholder' => 'parola',
        'forgot_password' => "Parolanızı mı unuttunuz?",
        'enter_email' => "Email adresinizi girin",
        'enter_login' => "Kullanıcı adınızı girin",
        'email_placeholder' => "email",
        'enter_new_password' => "Yeni Parolanızı girin",
        'password_reset' => "Parola Sıfırla",
        'restore_success' => "Email adresinize parolanızı nasıl sıfırlayacağınıza dair bilgiler gönderilmiştir.",
        'restore_error' => "':login' kullanıcı adı bulunamadı.",
        'reset_success' => "Parolanız başarıyla sıfırlandı. Giriş yapabilirsiniz.",
        'reset_error' => "Hatalı giriş yaptınız. Lütfen tekrar deneyin!",
        'reset_fail' => "Parolanız sıfırlanamıyor!",
        'apply' => 'Onayla',
        'cancel' => 'İptal',
        'delete' => 'Sil',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Pano',
    ],
    'user' => [
        'name' => 'Yönetici',
        'menu_label' => 'Yöneticiler',
        'list_title' => 'Yöneticileri Yönet',
        'new' => 'New Administrator',
        'login' => "Kullanıcı Adı",
        'first_name' => "Adı",
        'last_name' => "Soyadı",
        'full_name' => "Tam Adı",
        'email' => "Email",
        'groups' => "Gruplar",
        'groups_comment' => "Kullanıcının hangi gruba bağlı olduğunu belirleyin.",
        'avatar' => "Avatar",
        'password' => "Parola",
        'password_confirmation' => "Parola Onayı",
        'superuser' => "Süper Kullanıcı",
        'superuser_comment' => "Kullanıcıya her alanda yetki vermek için burayı işaretleyin.",
        'send_invite' => 'Email ile davet gönder',
        'send_invite_comment' => 'Kullanıcının email adresine davet göndermek için burayı işaretleyin',
        'delete_confirm' => 'Do you really want to delete this administrator?',
        'return' => 'Return to the administrator list',
        'group' => [
            'name' => 'Grup',
            'name_field' => 'Adı',
            'menu_label' => 'Gruplar',
            'list_title' => 'Grupları Yönet',
            'new' => 'New Administrator Group',
            'delete_confirm' => 'Do you really want to delete this administrator group?',
            'return' => 'Return to the group list',
        ],
        'preferences' => [
            'not_authenticated' => 'There is no an authenticated user to load or save preferences for.'
        ]
    ],
    'list' => [
        'default_title' => 'Liste',
        'search_prompt' => 'Arama...',
        'no_records' => 'There are no records in this view.',
        'missing_model' => 'List behavior used in :class does not have a model defined.',
        'missing_column' => 'There are no column definitions for :columns.',
        'missing_columns' => 'List used in :class has no list columns defined.',
        'missing_definition' => "List behavior does not contain a column for ':field'.",
        'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
    ],
    'form' => [
        'create_title' => ":name Oluştur",
        'update_title' => ":name Düzenle",
        'preview_title' => ":name Görüntüle",
        'create_success' => ':name başarıyla oluşturuldu',
        'update_success' => ':name başarıyla güncellendi',
        'delete_success' => ':name başarıyla silindi',
        'missing_id' => "Form record ID has not been specified.",
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavior does not contain a field for ':field'.",
        'not_found' => 'Form record with an ID of :id could not be found.',
        'create' => 'Create',
        'create_and_close' => 'Create and close',
        'creating' => 'Creating...',
        'save' => 'Kaydet',
        'save_and_close' => 'Kaydet ve kapat',
        'saving' => 'Kaydediliyor...',
        'delete' => 'Sil',
        'deleting' => 'Deleting...',
        'undefined_tab' => 'Diğer',
        'field_off' => 'Kapalı',
        'field_on' => 'Açık',
        'apply' => 'Kabul',
        'cancel' => 'İptal',
        'close' => 'Kapat',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Bu sekmeyi kapatmak istediğinize gerçekten emin misiniz? Kaydedilmemiş değişiklikleri kaybedeceksiniz.',
        'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
    ],
    'relation' => [
        'missing_definition' => "Relation behavior does not contain a definition for ':field'.",
        'missing_model' => "Relation behavior used in :class does not have a model defined.",
        'invalid_action_single' => "This action cannot be performed on a singular relationship.",
        'invalid_action_multi' => "This action cannot be performed on a multiple relationship.",
        'add' => "Ekle",
        'add_name' => ":name Ekle",
        'create' => "Oluştur",
        'create_name' => ":name Oluştur",
        'remove' => "Kaldır",
        'remove_name' => ":name Kaldır",
        'delete' => "Sil",
        'delete_name' => ":name Sil",
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "Model ':class' with an ID of :id could not be found",
        'missing_id' => "There is no ID specified for looking up the model record.",
        'missing_relation' => "Model ':class' does not contain a definition for ':relation'.",
        'invalid_class' => "Model :model used in :class is not valid, it must inherit the \Model class.",
    ],
];