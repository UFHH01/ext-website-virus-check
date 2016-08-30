<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
$messages = array(
    'tabReports' => 'Отчеты',
    'tabSettings' => 'Настройки',
    'tabAbout' => 'О программе',
    'pageTitle' => 'VirusTotal Website Check',
    'virustotalEnabled' => 'Проверка включена',
    'virustotalPublicApiKey' => 'Публичный API ключ VirusTotal',
    'adminHomeWidgetEnabled' => 'Виджет на домашней странице администратора включен',
    'settingsWasSuccessfullySaved' => 'Настройки были сохранены.',
    'settingsFormApiInvalid' => 'Неправильный API ключ. Результат HTTP запроса: %%code%%',
    'apiKeyBecameInvalid' => 'Последний запрос к API завершился с HTTP ошибкой 403',
    'buttonStartScan' => 'Старт',
    'buttonStopScan' => 'Стоп',
    'buttonStartDesc' => 'Начать сканирование',
    'buttonStopDesc' => 'Остановить сканирование',
    'infoStartSuccess' => 'Сканирование началось',
    'infoStopSuccess' => 'Сканирование остановлено',
    'scanTaskRunning' => 'Выполняется сканирование сайтов на вирусы:',
    'scanTaskDone' => 'Сканирование сайтов на вирусы завершено. <a href="#" onclick="window.location.reload();">Обновить страницу</a>',
    'errorScanAlreadyRunning' => 'Сканирование уже выполняется.',
    'domain' => 'Домен',
    'availableForScanning' => 'Доступен для сканирования',
    'yes' => 'Да',
    'no' => 'Нет',
    'unknown' => 'Неизвестно',
    'domainInactiveOrCantbeResolvedInHostingIp' => 'Домен "Приостановлен", "Отключен" или не резолвится в присвоенный IP адрес',
    'scanDate' => 'Дата сканирования',
    'checkResult' => 'Срабатывания / Всего',
    'reportLink' => 'Сслыка на отчет',
    'virustotalReport' => 'Отчет',
    'apikey_help' => 'Вы можете бесплатно получить API-ключ после регистрации на сайте <a rel="noopener noreferrer" target=\'_blank\' href=\'https://virustotal.com/\'>VirusTotal</a>',
    'virustotalPromoTitle' => 'Отчеты VirusTotal',
    'virustotalPromoButtonTitle' => 'Подробнее',
    'scanningWasNotPerformedYet' => 'Сканирование еще не выполнялось.',
    'scanningWasNotPerformedYetForList' => 'Сканирование еще не выполнялось',
    'youCanStartTaskAt' => 'Чтобы выполнить сканирование сейчас, Вы можете запустить запланированную задачу в <a href="/admin/scheduler/tasks-list">Планировщике задач</a>',
    'scanningRequestIsSent' => 'Запрос на сканирование отправлен',
    'totalDomains' => 'Всего доменов проверено: ',
    'ofTotalDomains' => ' из всего проверенных доменов ',
    'totalReports' => 'Всего "плохих" отчетов: ',
    'lastScan' => 'последнее сканирование выполнено в ',
    'about' => 'Это расширение использует публичное API <a rel="noopener noreferrer" target=\'_blank\' href=\'https://virustotal.com/\'>VirusTotal</a>, чтобы проверить Ваши сайты на вредоносные скрипты. Запросы выполняются через ежедневную задачу, которую Вы можете найти в <a href="/admin/scheduler/tasks-list">Scheduled Tasks</a>',
    'feedback' => 'В случае каких-либо проблем с расширением Вы можете создать issue в репозитории на <a rel="noopener noreferrer" target="_blank" href="https://github.com/plesk/ext-website-virus-check">GitHub</a>',
    'faq' => 'FAQ',
    'question1' => '<p><b>Q: Почему нет нотификации по e-mail?</b><br />A: Нет никаких гарантий, что сообщение электронной почты попадет к Вам в ящик.</p>',
    'question2' => '<p><b>Q: Почему ежедневная задача выполняется так долго?</b><br />A: Из-за ограничений публичного API расширение отправляет API запросы со скоростью 3 домена в минуту.</p>',
    'question3' => '<p><b>Q: Можно ли выполнять ежедневную задачу несколько раз в один день?</b><br />A: Да, можно.</p>',
);