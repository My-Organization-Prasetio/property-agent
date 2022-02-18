<?php

class Material_model extends CI_model
{
	public function all()
	{
		return $this->db->query("SELECT
                                    mu.user_id,
                                    mu.user_name,
                                    mu.user_full_name,
                                    mu.user_email,
                                    mu.user_phone_number,
                                    mu.id_card,
                                    mu.user_photo,
                                    ul.user_level_position
                                FROM mst_user mu
                                LEFT JOIN user_level_management ul ON ul.user_level_id = mu.user_level_id");
	}

    // public function getById($id)
	// {
	// 	return $this->db->query("SELECT
    //                                 mp.product_id,
    //                                 mp.product_name,
    //                                 mp.product_unit,
    //                                 mp.product_price,
    //                                 mp.product_margin_price,
    //                                 mp.product_after_margin_price,
    //                                 mp.product_description,
    //                                 mpc.category_id,
    //                                 mpc.category_code,
    //                                 mpc.category_name
    //                             FROM
    //                             mst_product mp
    //                             JOIN mst_product_category mpc ON mpc.category_id = mp.category_id
    //                             WHERE mp.product_id = $id
    //                             AND mp.deleted = 0");
	// }
}