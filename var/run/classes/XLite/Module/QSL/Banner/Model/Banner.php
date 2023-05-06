<?php
namespace XLite\Module\QSL\Banner\Model;
/**
 * Banner
 *
 * @Entity (repositoryClass="\XLite\Module\QSL\Banner\Model\Repo\Banner")
 * @Table (name="banners",
 *    indexes={
 *      @Index (name="ep", columns={"enabled","position"}),
 *      @Index (name="effect", columns={"effect"})
 *  }
 * )
 *
 */
class Banner extends \XLite\Module\QSL\Banner\Model\BannerWithSimpleCMS {}