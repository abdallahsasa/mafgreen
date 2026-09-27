<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'gallery' => 'array',
    ];

    /**
     * Alias for feature_image (featured_image getter).
     */
    public function getFeaturedImageAttribute(): ?string
    {
        return $this->feature_image;
    }

    /**
     * Alias for feature_image (featured_image setter).
     */
    public function setFeaturedImageAttribute(?string $value): void
    {
        $this->attributes['feature_image'] = $value;
    }

    /**
     * Get the public URL for the feature image.
     */
    public function getFeatureImageUrlAttribute(): ?string
    {
        if (empty($this->feature_image)) {
            return null;
        }

        if (str_starts_with($this->feature_image, 'http://') || str_starts_with($this->feature_image, 'https://')) {
            return $this->feature_image;
        }

        if (str_starts_with($this->feature_image, 'assets/')) {
            return asset($this->feature_image);
        }

        if (str_starts_with($this->feature_image, 'storage/')) {
            return asset($this->feature_image);
        }

        return Storage::disk('public')->url($this->feature_image);
    }

    /**
     * Get the public URLs for gallery images.
     *
     * @return array<string>
     */
    public function getGalleryUrlsAttribute(): array
    {
        if (empty($this->gallery) || ! is_array($this->gallery)) {
            return [];
        }

        return array_values(array_filter(array_map(function ($path) {
            if (empty($path)) {
                return null;
            }

            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                return $path;
            }

            if (str_starts_with($path, 'assets/')) {
                return asset($path);
            }

            if (str_starts_with($path, 'storage/')) {
                return asset($path);
            }

            return Storage::disk('public')->url($path);
        }, $this->gallery)));
    }
}
