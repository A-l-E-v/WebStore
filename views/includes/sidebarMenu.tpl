<div class="flex-shrink-0 p-3" style="width: 280px;">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
    <svg class="bi pe-none me-2" width="30" height="24">
      <use xlink:href="#bootstrap"></use>
    </svg>
    <span class="fs-5 fw-semibold">Категории</span>
  </a>
  <ul class="list-unstyled ps-0">
    {foreach $arrCategories as $item}
    <li class="mb-1">
      <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
        {$item['name_ru']}
      </button>
      <div class="collapse" id="home-collapse" style="">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
        </ul>
      </div>
    </li>
    {/foreach}
  </ul>
</div>