<h1 style="color:#f40;">Hi!</h1>
<p style="color:#080;font-size:18px;">Following is detail of contact person for remote work</p>
<p style="color:#080;font-size:18px;">Name: {{ $data['full_name'] }}</p>
<p style="color:#080;font-size:18px;">Email: {{ $data['email'] }}</p>
<p style="color:#080;font-size:18px;">Phone: {{ $data['phone'] }}</p>
@if(isset($data['company_name']) && $data['company_name'])
<p style="color:#080;font-size:18px;">Company Name: {{ $data['company_name'] }}</p>
@endif
@if(isset($data['message']) && $data['message'])
<p style="color:#080;font-size:18px;">message: {{ $data['message'] }}</p>
@endif
@if(isset($data['work_type']) && $data['work_type'])
<p style="color:#080;font-size:18px;">Work Type: {{ $data['work_type'] }}</p>
@endif
@if(isset($data['options']) && $data['options'])
<p style="color:#080;font-size:18px;">Tech Team: {{ implode(', ', $data['options']) }}</p>
@endif
@if(isset($data['skills']) && $data['skills'])
<p style="color:#080;font-size:18px;">Skills: {{ implode(', ', $data['skills']) }}</p>
@endif
@if(isset($data['team_size']) && $data['team_size'])
<p style="color:#080;font-size:18px;">Team Size: {{ $data['team_size'] }}</p>
@endif
