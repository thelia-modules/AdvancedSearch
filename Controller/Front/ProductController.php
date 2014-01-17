<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/
namespace AdvancedSearch\Controller\Front;

use Thelia\Controller\Front\BaseFrontController;

/**
 *
 * Display ajax products list
 *
 * @author Michaël Espeche <mespeche@openstudio.fr>
 */

class ProductController extends BaseFrontController
{

    public function getListAjaxAction()
    {
        $limit                      = $this->getRequest()->get('limit');
        $order                      = $this->getRequest()->get('order');
        $page                       = $this->getRequest()->get('page');
        $type                       = $this->getRequest()->get('type');
        $featureAvailability        = $this->getRequest()->get('feature_availability');
        $featureAvailabilityFromUrl = $this->getRequest()->get('feature_availability_from_url');

        $args = array(
            'limit'                         => $limit,
            'product_order'                 => $order,
            'product_page'                  => $page,
            'product_type'                  => $type,
            'feature_availability'          => $featureAvailability,
            'feature_availability_from_url' => $featureAvailabilityFromUrl
        );

        return $this->render('ajax/product-list', $args);
    }

}
