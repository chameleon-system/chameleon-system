<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use KnpU\OAuth2ClientBundle\KnpUOAuth2ClientBundle;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends ChameleonSystem\CoreBundle\ChameleonAppKernel
{
    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/../vendor/chameleon-system/chameleon-base/src/CoreBundle/Resources/config/project-config_'.$this->getEnvironment().'.yml');
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles(): iterable
    {
        $bundles = array(
            new \AppBundle\AppBundle(),

            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),

            new \ChameleonSystem\AmazonPaymentBundle\ChameleonSystemAmazonPaymentBundle(),
            new \ChameleonSystem\AtomicLockBundle\ChameleonSystemAtomicLockBundle(),
            new \ChameleonSystem\AutoclassesBundle\ChameleonSystemAutoclassesBundle(),
            new \ChameleonSystem\ChameleonShopThemeBundle\ChameleonSystemChameleonShopThemeBundle(),
            new \ChameleonSystem\CmsActionPluginBundle\ChameleonSystemCmsActionPluginBundle(),
            new \ChameleonSystem\CmsCacheBundle\ChameleonSystemCmsCacheBundle(),
            new \ChameleonSystem\CmsCaptchaBundle\ChameleonSystemCmsCaptchaBundle(),
            new \ChameleonSystem\CmsChangeLogBundle\ChameleonSystemCmsChangeLogBundle(),
            new \ChameleonSystem\CmsClassManagerBundle\ChameleonSystemCmsClassManagerBundle(),
            new \ChameleonSystem\CmsCoreLogBundle\ChameleonSystemCmsCoreLogBundle(),
            new \ChameleonSystem\CmsCounterBundle\ChameleonSystemCmsCounterBundle(),
            new \ChameleonSystem\CmsFileManagerBundle\ChameleonSystemCmsFileManagerBundle(),
            new \ChameleonSystem\CmsInterfaceManagerBundle\ChameleonSystemCmsInterfaceManagerBundle(),
            new \ChameleonSystem\CmsNavigationBundle\ChameleonSystemCmsNavigationBundle(),
            new \ChameleonSystem\CmsNavigationPkgShopBundle\ChameleonSystemCmsNavigationPkgShopBundle(),
            new \ChameleonSystem\CmsResultCacheBundle\ChameleonSystemCmsResultCacheBundle(),
            new \ChameleonSystem\CmsRoutingBundle\ChameleonSystemCmsRoutingBundle(),
            new \ChameleonSystem\CmsStringUtilitiesBundle\ChameleonSystemCmsStringUtilitiesBundle(),
            new \ChameleonSystem\CmsTextBlockBundle\ChameleonSystemCmsTextBlockBundle(),
            new \ChameleonSystem\CmsTextFieldBundle\ChameleonSystemCmsTextFieldBundle(),
            new \ChameleonSystem\CommentBundle\ChameleonSystemCommentBundle(),
            new \ChameleonSystem\CookieConsentBundle\ChameleonSystemCookieConsentBundle(),
            new \ChameleonSystem\CoreBundle\ChameleonSystemCoreBundle(),
            new \ChameleonSystem\CoreValidatorConstraintsBundle\ChameleonSystemCoreValidatorConstraintsBundle(),
            new \ChameleonSystem\Csv2SqlBundle\ChameleonSystemCsv2SqlBundle(),
            new \ChameleonSystem\DatabaseMigrationBundle\ChameleonSystemDatabaseMigrationBundle(),
            new \ChameleonSystem\ExternalTrackerBundle\ChameleonSystemExternalTrackerBundle(),
            new \ChameleonSystem\ExternalTrackerGoogleAnalyticsBundle\ChameleonSystemExternalTrackerGoogleAnalyticsBundle(),
            new \ChameleonSystem\ExtranetBundle\ChameleonSystemExtranetBundle(),
            new \ChameleonSystem\ExtranetRegistrationGuestBundle\ChameleonSystemExtranetRegistrationGuestBundle(),
            new \ChameleonSystem\GenericTableExportBundle\ChameleonSystemGenericTableExportBundle(),
            new \ChameleonSystem\ImageCropBundle\ChameleonSystemImageCropBundle(),
            new \ChameleonSystem\ImageHotspotBundle\ChameleonSystemImageHotspotBundle(),
            new \ChameleonSystem\JavaScriptMinificationBundle\ChameleonSystemJavaScriptMinificationBundle(),
            new \ChameleonSystem\MediaManagerBundle\ChameleonSystemMediaManagerBundle(),
            new \ChameleonSystem\MinifierJsJshrinkBundle\ChameleonSystemMinifierJsJshrinkBundle(),
            new \ChameleonSystem\MultiModuleBundle\ChameleonSystemMultiModuleBundle(),
            new \ChameleonSystem\NewsletterBundle\ChameleonSystemNewsletterBundle(),
            new \ChameleonSystem\PkgCoreBundle\ChameleonSystemPkgCoreBundle(),
            new \ChameleonSystem\SearchBundle\ChameleonSystemSearchBundle(),
            new \ChameleonSystem\ShopAffiliateBundle\ChameleonSystemShopAffiliateBundle(),
            new \ChameleonSystem\ShopArticleDetailPagingBundle\ChameleonSystemShopArticleDetailPagingBundle(),
            new \ChameleonSystem\ShopArticlePreorderBundle\ChameleonSystemShopArticlePreorderBundle(),
            new \ChameleonSystem\ShopArticleReviewBundle\ChameleonSystemShopArticleReviewBundle(),
            new \ChameleonSystem\ShopBundle\ChameleonSystemShopBundle(),
            new \ChameleonSystem\ShopCurrencyBundle\ChameleonSystemShopCurrencyBundle(),
            new \ChameleonSystem\ShopDhlPackstationBundle\ChameleonSystemShopDhlPackstationBundle(),
            new \ChameleonSystem\ShopListFilterBundle\ChameleonSystemShopListFilterBundle(),
            new \ChameleonSystem\ShopNewsletterSignupWithOrderBundle\ChameleonSystemShopNewsletterSignupWithOrderBundle(),
            new \ChameleonSystem\ShopOrderStatusBundle\ChameleonSystemShopOrderStatusBundle(),
            new \ChameleonSystem\ShopOrderViaPhoneBundle\ChameleonSystemShopOrderViaPhoneBundle(),
            new \ChameleonSystem\ShopPaymentHandlerSofortueberweisungBundle\ChameleonSystemShopPaymentHandlerSofortueberweisungBundle(),
            new \ChameleonSystem\ShopPaymentIPNBundle\ChameleonSystemShopPaymentIPNBundle(),
            new \ChameleonSystem\ShopPaymentTransactionBundle\ChameleonSystemShopPaymentTransactionBundle(),
            new \ChameleonSystem\ShopPrimaryNavigationBundle\ChameleonSystemShopPrimaryNavigationBundle(),
            new \ChameleonSystem\ShopProductExportBundle\ChameleonSystemShopProductExportBundle(),
            new \ChameleonSystem\ShopRatingServiceBundle\ChameleonSystemShopRatingServiceBundle(),
            new \ChameleonSystem\ShopWishlistBundle\ChameleonSystemShopWishlistBundle(),
            new \ChameleonSystem\SnippetRendererBundle\ChameleonSystemSnippetRendererBundle(),
            new \ChameleonSystem\TrackViewsBundle\ChameleonSystemTrackViewsBundle(),
            new \ChameleonSystem\UpdateCounterMigrationBundle\ChameleonSystemUpdateCounterMigrationBundle(),
            new \ChameleonSystem\UrlAliasBundle\ChameleonSystemUrlAliasBundle(),
            new \ChameleonSystem\ViewRendererBundle\ChameleonSystemViewRendererBundle(),
            new \ChameleonSystem\SecurityBundle\ChameleonSystemSecurityBundle(),
            new \ChameleonSystem\CmsBackendBundle\ChameleonSystemCmsBackendBundle(),
            new KnpUOAuth2ClientBundle(),
            new \ChameleonSystem\EcommerceStatsBundle\ChameleonSystemEcommerceStatsBundle()

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new \ChameleonSystem\DistributionBundle\ChameleonSystemDistributionBundle();
            $bundles[] = new \ChameleonSystem\TwigDebugBundle\ChameleonSystemTwigDebugBundle();
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new \Symfony\Bundle\MakerBundle\MakerBundle();
        }

        return $bundles;
    }
}
