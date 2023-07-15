<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\UpdateRequest;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::find(1);

        return view('admin.setting.index', compact('settings'));
    }

    public function update(UpdateRequest $request)
    {
        $data = $request->validated();

        $logs = !empty($data['send_logs']) && $data['send_logs'] == 'on' ? 1 : 0;

        $data = array_filter($data);
        $data['send_logs'] = $logs;

        $settings = Setting::find(1);

        if (!empty($settings))
            $settings->update($data);
        else
            Setting::create($data);


        return redirect()->route('admin.setting.index');
    }
}
