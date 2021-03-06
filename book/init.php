<?php
/**
 * @author Thomas Pellissier Tanon
 * @copyright 2011 Thomas Pellissier Tanon
 * @license GPL-2.0-or-later
 */
global $wsexportConfig;
$basePath = $wsexportConfig['basePath'];

include_once $basePath . '/vendor/autoload.php';

include_once $basePath . '/utils/utils.php';
include_once $basePath . '/utils/HttpException.php';
include_once $basePath . '/utils/Api.php';
include_once $basePath . '/utils/LoggingMiddleware.php';
include_once $basePath . '/utils/ToolLogger.php';
include_once $basePath . '/book/Generator.php';
include_once $basePath . '/book/Picture.php';
include_once $basePath . '/book/Page.php';
include_once $basePath . '/book/Book.php';
include_once $basePath . '/book/PageParser.php';
include_once $basePath . '/book/FileCleaner.php';
include_once $basePath . '/book/BookProvider.php';
include_once $basePath . '/book/GeneratorSelector.php';
include_once $basePath . '/book/BookCreator.php';
include_once $basePath . '/book/FontProvider.php';
include_once $basePath . '/book/OpdsBuilder.php';
include_once $basePath . '/book/CreationLog.php';
include_once $basePath . '/book/Refresh.php';

include_once $basePath . '/book/formats/AtomGenerator.php';
include_once $basePath . '/book/formats/EpubGenerator.php';
include_once $basePath . '/book/formats/Epub2Generator.php';
include_once $basePath . '/book/formats/Epub3Generator.php';
include_once $basePath . '/book/formats/ConvertGenerator.php';
