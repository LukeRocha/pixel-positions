<x-layout>
  <x-page-heading>New Job</x-page-heading>

  <x-forms.form method="POST" action="/jobs">
    <x-forms.input label="Title" name="title" placeholder="Developer" />
    <x-forms.input label="Salary" name="salary" placeholder="$500,000 USD" />
    <x-forms.input label="Location" name="location" placeholder="Santos, São Paulo" />

    <x-forms.select label="Schedule" name="schedule">
      <option>Part Time </option>
      <option>Full Time </option>
    </x-forms.select>


      <x-forms.input label="URL" name="url" placeholder="https://github.dev" />
      <x-forms.checkbox label="Featured (Extra cost)" name="featured" />

      <x-forms.input label="Tags (Comma separated)" name="tags" placeholder="Educational, Video, Gaming" />

      <x-forms.button>Publish</x-forms.button>
  </x-forms.form>
</x-layout>
