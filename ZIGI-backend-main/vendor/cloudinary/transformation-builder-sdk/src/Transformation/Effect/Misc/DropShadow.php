<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation;

/**
 * Class DropShadow
 */
class DropShadow extends EffectAction
{
    /**
     * DropShadow constructor.
     *
     * @param int|null      $azimuth   Value in range 0 - 360 (degrees).
     * @param int|null      $elevation Value in range 0 - 90 (degrees).
     * @param int|null $spread    Value in range 0 -100.
     */
    public function __construct(?int $azimuth = null, ?int$elevation = null, ?int $spread = null)
    {
        parent::__construct(new DropShadowQualifier($azimuth, $elevation, $spread));
    }

    /**
     * Sets the direction the light is coming from to cause the shadow effect.
     *
     * @param ?int $azimuth Value in range 0 - 360 (degrees).
     *
     * @return $this
     */
    public function azimuth(?int $azimuth): static
    {
        $this->getMainQualifier()->azimuth($azimuth);

        return $this;
    }

    /**
     *  Sets the height of the light source above the 'ground' to cause the shadow effect.
     *
     * @param ?int $elevation Value in range 0 - 90 (degrees).
     *
     * @return $this
     */
    public function elevation(?int $elevation): static
    {
        $this->getMainQualifier()->elevation($elevation);

        return $this;
    }

    /**
     * Sets the spread of the light source. A small number means 'point' light. A larger number means 'area' light.
     *
     * @param ?int $spread Value in range 0 -100.
     *
     * @return $this
     */
    public function spread(?int $spread): static
    {
        $this->getMainQualifier()->spread($spread);

        return $this;
    }
}
