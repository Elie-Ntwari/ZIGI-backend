<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerOBkSjAZ\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerOBkSjAZ/EntityManagerGhostC135a4f.php';
require __DIR__.'/ContainerOBkSjAZ/RequestPayloadValueResolverGhostB9dbeab.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_WhenService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_ExpressionService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_EmailService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidator_BuilderService.php';
require __DIR__.'/ContainerOBkSjAZ/getValidatorService.php';
require __DIR__.'/ContainerOBkSjAZ/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerOBkSjAZ/getSession_FactoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getServicesResetterService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecrets_VaultService.php';
require __DIR__.'/ContainerOBkSjAZ/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/ContainerOBkSjAZ/getRouting_LoaderService.php';
require __DIR__.'/ContainerOBkSjAZ/getMailer_TransportsService.php';
require __DIR__.'/ContainerOBkSjAZ/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerOBkSjAZ/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerOBkSjAZ/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerOBkSjAZ/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerOBkSjAZ/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerOBkSjAZ/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerOBkSjAZ/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerOBkSjAZ/getHttpClient_UriTemplateService.php';
require __DIR__.'/ContainerOBkSjAZ/getHttpClient_TransportService.php';
require __DIR__.'/ContainerOBkSjAZ/getErrorControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Orm_DefaultConfigurationService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerOBkSjAZ/getDoctrineService.php';
require __DIR__.'/ContainerOBkSjAZ/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerOBkSjAZ/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerOBkSjAZ/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_ValidatorService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_SystemClearerService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_SystemService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_SecurityIsCsrfTokenValidAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_AppClearerService.php';
require __DIR__.'/ContainerOBkSjAZ/getCache_AppService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_SessionService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_RequestService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerOBkSjAZ/getArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerOBkSjAZ/getTemplateControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getRedirectControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getReplyServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getPhotoProductServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommentServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandServiceService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getReplyRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getPhotoProductRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getDetailsCommandRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommentRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getCategorieRepositoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getStatsControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getReplyControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getPhotoProductControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getPaymentControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommentControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandControllerService.php';
require __DIR__.'/ContainerOBkSjAZ/getReplyControlleraddReplyService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_ZHyJIs5_KernelloadRoutesService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_ZHyJIs5Service.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandControllerrejectOrderService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandControllergetAllOrdersService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandControllercreateOrderService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommandControllerapproveOrderService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_RT8TQD7Service.php';
require __DIR__.'/ContainerOBkSjAZ/getCommentControllernewCommentService.php';
require __DIR__.'/ContainerOBkSjAZ/getCommentControllerlistCommentService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_NLnEcBQService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerupdateUserService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerrequestNewCodeService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerloginService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerlistUsersService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllerdeleteUserService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControllercreateCustomerService.php';
require __DIR__.'/ContainerOBkSjAZ/getUserControlleractiveAccountService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_Hz_RJkaService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_ZyP9f7KService.php';
require __DIR__.'/ContainerOBkSjAZ/getPhotoProductControllerexecuteAddPhotoService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerupdateProductStockService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteUpdateProductService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteUpdateCategoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteListProductsService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteListCategoriesService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteDeleteProductService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteDeleteCategoryService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteAddProductService.php';
require __DIR__.'/ContainerOBkSjAZ/getProductControllerexecuteAddCategoryService.php';
require __DIR__.'/ContainerOBkSjAZ/get_ServiceLocator_P7gSmYqService.php';
require __DIR__.'/ContainerOBkSjAZ/getStatsControllergetStatsService.php';
require __DIR__.'/ContainerOBkSjAZ/get_Security_RequestMatcher_GOpgIHxService.php';
require __DIR__.'/ContainerOBkSjAZ/get_Security_RequestMatcher_7JLSkpService.php';
require __DIR__.'/ContainerOBkSjAZ/get_Security_RequestMatcher_NaFk5J1Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\CommandController';
$classes[] = 'App\Controller\CommentController';
$classes[] = 'App\Controller\PaymentController';
$classes[] = 'App\Service\CinetPayService';
$classes[] = 'App\Controller\PhotoProductController';
$classes[] = 'App\Controller\ProductController';
$classes[] = 'App\Controller\ReplyController';
$classes[] = 'App\Controller\StatsController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Repository\CategorieRepository';
$classes[] = 'App\Repository\CommandRepository';
$classes[] = 'App\Repository\CommentRepository';
$classes[] = 'App\Repository\DetailsCommandRepository';
$classes[] = 'App\Repository\PhotoProductRepository';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'App\Repository\ReplyRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Service\CommandService';
$classes[] = 'App\Service\CommentService';
$classes[] = 'App\Service\PhotoProductService';
$classes[] = 'App\Service\ImgBBService';
$classes[] = 'App\Service\ProductService';
$classes[] = 'App\Service\ReplyService';
$classes[] = 'App\Service\UserService';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsCsrfTokenValidAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Dbal\SchemaAssetsFilterManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\IdleConnectionMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\Middleware\IdleConnection\Listener';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultTypedFieldMapper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpClient\UriTemplateHttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\PayloadEnrichment\ChainEnrichment';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Component\DependencyInjection\StaticEnvVarLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityCategorie.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityCommand.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityComment.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityDetailsCommand.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityPhotoProduct.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityProduct.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityReply.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityUser.php';

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Mapping\\FieldMapping';
$classes[] = 'Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$classes[] = 'Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping';
$classes[] = 'Doctrine\\ORM\\Mapping\\JoinColumnMapping';
$preloaded = Preloader::preload($classes, $preloaded);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
