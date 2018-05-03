<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Storage;

/**
 * Class Student.
 *
 * @package namespace App\Entities;
 */
class Student extends Model implements Transformable
{
    use TransformableTrait;

    protected $uploadsDirectory = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'department_id', 'avatar'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getAvatarAttribute($avatar)
    {
        return Storage::url($this->uploadsDirectory . DIRECTORY_SEPARATOR . $avatar);
    }

    public function saveAvatar($avatar = null)
    {
        if (!$avatar) {
            return $this;
        }

        $newName = uniqid() . '.' . $avatar->getClientOriginalExtension();
        
        $this->avatar = $newName;

        if (!$avatar->storeAs($this->uploadsDirectory, $newName)) {
            $this->avatar = null;
        }
        
        return $this->save();
    }

    public function updateAvatar($avatar = null)
    {
        Storage::exists($this->avatarUrl()) ?? Storage::delete($this->avatarUrl());

        return $this->saveAvatar($avatar);
    }

    public function deleteAvatar($avatar = null)
    {
        Storage::delete($this->avatarUrl());
    }

    protected function avatarUrl()
    {
        $this->uploadsDirectory . DIRECTORY_SEPARATOR . $this->avatar;
    }
}
