<?php

function tenant_url_with_protocol($url): string
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = "https://";
    } else {
        $protocol = "http://";
    }

    return $protocol . $url;
}

function route_prefix(): string
{
    if (!empty(tenant()))
    {
        return 'tenant.';
    }

    return 'landlord.';
}
