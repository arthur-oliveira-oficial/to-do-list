<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerVmNNibc\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerVmNNibc/EntityManagerGhost614a58f.php';
require __DIR__.'/ContainerVmNNibc/RequestPayloadValueResolverGhost01ca9cc.php';
require __DIR__.'/ContainerVmNNibc/getValidator_WhenService.php';
require __DIR__.'/ContainerVmNNibc/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerVmNNibc/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerVmNNibc/getValidator_ExpressionService.php';
require __DIR__.'/ContainerVmNNibc/getValidator_EmailService.php';
require __DIR__.'/ContainerVmNNibc/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerVmNNibc/getSession_FactoryService.php';
require __DIR__.'/ContainerVmNNibc/getServicesResetterService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_Login_UserProviderService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerVmNNibc/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerVmNNibc/getSecrets_VaultService.php';
require __DIR__.'/ContainerVmNNibc/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/ContainerVmNNibc/getRouting_LoaderService.php';
require __DIR__.'/ContainerVmNNibc/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerVmNNibc/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerVmNNibc/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerVmNNibc/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerVmNNibc/getErrorControllerService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerVmNNibc/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_Security_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerVmNNibc/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerVmNNibc/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerVmNNibc/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerVmNNibc/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerVmNNibc/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerVmNNibc/getCache_SystemClearerService.php';
require __DIR__.'/ContainerVmNNibc/getCache_SystemService.php';
require __DIR__.'/ContainerVmNNibc/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerVmNNibc/getCache_SecurityIsCsrfTokenValidAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerVmNNibc/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerVmNNibc/getCache_AppClearerService.php';
require __DIR__.'/ContainerVmNNibc/getCache_AppService.php';
require __DIR__.'/ContainerVmNNibc/getTemplateControllerService.php';
require __DIR__.'/ContainerVmNNibc/getRedirectControllerService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioRepositoryService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaRepositoryService.php';
require __DIR__.'/ContainerVmNNibc/getListaRepositoryService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllerService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllerService.php';
require __DIR__.'/ContainerVmNNibc/getLoginControllerService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllerService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_ZHyJIs5_KernelloadRoutesService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_ZHyJIs5Service.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_VL10ixRService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllerindexService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllercompartilharService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllerdeleteService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllershowService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllereditService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_G7iP4uJService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllerdeleteService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllerindexService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_ZyP9f7KService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllershowService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllerdeleteService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllereditService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllerindexService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllernewService.php';
require __DIR__.'/ContainerVmNNibc/getListaControllernewService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_GL345QQService.php';
require __DIR__.'/ContainerVmNNibc/getUsuarioControllernewService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllershowService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaControllereditService.php';
require __DIR__.'/ContainerVmNNibc/get_ServiceLocator_2aydOaFService.php';
require __DIR__.'/ContainerVmNNibc/get_Security_RequestMatcher_GOpgIHxService.php';
require __DIR__.'/ContainerVmNNibc/get_Security_RequestMatcher_7JLSkpService.php';
require __DIR__.'/ContainerVmNNibc/get_Security_RequestMatcher_NaFk5J1Service.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerVmNNibc/get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerVmNNibc/getTarefaVoterService.php';
require __DIR__.'/ContainerVmNNibc/getListaVoterService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'App\Security\Voter\ListaVoter';
$classes[] = 'App\Security\Voter\TarefaVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\Attribute\MapEntity';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ListaController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\TarefaController';
$classes[] = 'App\Controller\UsuarioController';
$classes[] = 'App\Repository\ListaRepository';
$classes[] = 'App\Repository\TarefaRepository';
$classes[] = 'App\Repository\UsuarioRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsCsrfTokenValidAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Dbal\SchemaAssetsFilterManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\IdleConnectionMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\Middleware\IdleConnection\Listener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultTypedFieldMapper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\EventListener\SchemaFilterListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
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
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
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
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AttributeLoader';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader';
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
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);
