<?php

class Property_model extends CI_model
{
	public function all()
	{
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                ORDER BY p.property_id DESC");
	}

    public function getById($id)
	{
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.property_id = $id
                                ORDER BY p.property_id");
	}

    public function queryByKeyword($keyword, $cities)
	{
        $title = empty($keyword) ? "%%" : "%".$keyword."%";
        $address = empty($keyword) ? "%%" : "%".$keyword."%";
        $cities = empty($cities) ? "%%" : "%".$cities."%";

		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.property_title like '$title'
                                AND mc.city_name like '$cities'
                                OR p.address like '$address'
                                AND mc.city_name like '$cities'
                                ORDER BY p.property_id
                                LIMIT 12");
	}

    public function getOffset($offset, $items_per_page = 12)
	{
        $offset = $offset != null ? $offset : 1;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                                                WHERE p.deleted = 0
                                ORDER BY p.property_title ASC
                                LIMIT $offset, $items_per_page");
	}

    public function getNew($offset=12)
	{
        $offset = $offset != null ? $offset : 1;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                ORDER BY p.property_id DESC
                                LIMIT $offset");
	}

    public function totalRows()
	{
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0");
	}

    public function getByCategory($offset, $items_per_page = 12, $category)
	{
        $offset = $offset != null ? $offset : 1;
        $category = empty($category) ? "%%" : "%".$category."%";
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND mac.asset_category_name like '$category'
                                ORDER BY p.property_title ASC
                                LIMIT $offset, $items_per_page");
	}

    public function getBySaleType($offset, $items_per_page = 12, $sale_type)
	{
        $offset = $offset != null ? $offset : 1;
        $sale_type = empty($sale_type) ? 0 : $sale_type == "sale" ? 2 : 1;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND p.sale_type = $sale_type
                                ORDER BY p.property_title ASC
                                LIMIT $offset, $items_per_page");
	}

    public function getByTag($offset, $items_per_page = 12, $tag)
	{
        $offset = $offset != null ? $offset : 1;
		return $this->db->query("SELECT
                                    p.property_id,
                                    p.property_title,
                                    p.property_description,
                                    p.sale_type,
                                    p.address,
                                    p.unit_number,
                                    land_area,
                                    p.building_area,
                                    p.bedroom,
                                    p.bathroom,
                                    p.price,
                                    p.fee,
                                    p.asset_category_id,
                                    p.area_id,
                                    p.city_id,
                                    p.agent_id,
                                    p.owner_id,
                                    mac.asset_category_name,
                                    ma.area_name,
                                    mc.city_name,
                                    mua.user_full_name agent_name,
                                    muo.owner_name
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                JOIN mst_tags mt ON mt.tag_code = p.tag_code
                                WHERE p.deleted = 0
                                AND LOWER(mt.tag_name) = LOWER('$tag')
                                ORDER BY p.property_title ASC
                                LIMIT $offset, $items_per_page");
	}

    public function totalRowsByTag($tag)
	{
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                JOIN mst_tags mt ON mt.tag_code = p.tag_code
                                WHERE p.deleted = 0
                                AND LOWER(mt.tag_name) = LOWER('$tag')");
	}

    public function totalRowsByCategory($category)
	{
        $category = empty($category) ? "%%" : "%".$category."%";
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND mac.asset_category_name like '$category'");
	}

    public function totalRowsBySaleType($sale_type)
	{
        $sale_type = empty($sale_type) ? 0 : $sale_type == "sale" ? 2 : 1;
		return $this->db->query("SELECT
                                    COUNT(*) total_rows
                                FROM property p
                                JOIN mst_asset_category mac ON mac.asset_category_id = p.asset_category_id
                                JOIN mst_area ma ON ma.area_id = p.area_id
                                JOIN mst_cities mc ON mc.city_id = p.city_id
                                JOIN mst_user mua ON mua.user_id = p.agent_id
                                JOIN mst_owner muo ON muo.owner_id = p.owner_id
                                WHERE p.deleted = 0
                                AND p.sale_type = $sale_type");
	}
}