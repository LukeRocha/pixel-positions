<x-layout>
  <div class="space-y-10">
      <section class="text-center pt-6">
          <h1 class="font-bold text-4xl">Let's find a new Job for you!</h1>

          <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Web developer" />
          </x-forms.form>
      </section>

      <section class="pt-10">
          <x-section-heading >Featured Jobs</x-section-heading> 

          <div class="mt-6 grid lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $job )
              <x-job-card :$job />
            @endforeach
          </div>
      </section>

      <section>
          <x-section-heading>Tags</x-section-heading>

          <div class="mt-6 space-x-1">
            @foreach ($tags as $tag )
              <x-tag :$tag />
            @endforeach
          </div>
      </section>

      <section>
          <x-section-heading>Recent Jobs</x-section-heading>

          <div class="mt-6 space-y-6">
            @foreach ($unfeaturedJobs as $job )
            <x-job-card-wide :$job />
            @endforeach
          </div>
      </section>
  </div>
</x-layout>